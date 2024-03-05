<?php

use App\Http\Controllers\AbortController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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


Route::get('/',[HomeController::class,'show']);
Route::post('project/store',[ProjectController::class,'store']);
Route::prefix('task')->group(function()  {
    Route::get('show',[TaskController::class,'show']);
    Route::post('store',[TaskController::class,'store']);
});
Route::get('drag',function(){return view('task.drag');});

});
