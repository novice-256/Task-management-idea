<?php

use App\Http\Controllers\AbortController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('auth/login', function () {return view('login');})->name('login');
Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('auth/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('abort/{code}/{message}', [AbortController::class, 'abort']);
Route::middleware(['AuthCheck'])->group(function () {

// Tasks
Route::get('/',[HomeController::class,'show']);
Route::post('project/store',[ProjectController::class,'store']);
Route::prefix('task')->group(function()  {
    Route::get('show',[TaskController::class,'show']);
    Route::post('store',[TaskController::class,'store']);
    Route::put('move/{id}',[TaskController::class,'update']);
});
// Users
Route::prefix('users')->group(function()  {
    Route::get('show',[UserController::class,'show']);
    Route::get('create',[UserController::class,'create']);
    Route::post('store',[UserController::class,'store']);
});
// Role
Route::prefix('user')->group(function()  {
    Route::get('show',[UserRoleController::class,'show']);
    Route::get('create',[UserRoleController::class,'create']);
    Route::post('store',[UserRoleController::class,'store']);
});
Route::get('drag',function(){return view('task.drag');});

});
