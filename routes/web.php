<?php

use App\Http\Controllers\AbortController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\ApiController;
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
Route::prefix('project')->group(function()  {
    Route::post('store',[ProjectController::class,'store']);
    Route::get('show/{id}',[ProjectController::class,'show']);
});

Route::prefix('task')->group(function()  {
    Route::get('show',[TaskController::class,'show']);
    Route::get('card',[TaskController::class,'card']);
    Route::post('store',[TaskController::class,'store']);
    Route::put('move/{id}',[TaskController::class,'update']);
});
// Users
Route::prefix('users')->group(function()  {
    Route::get('show',[UserController::class,'show']);
    Route::get('create',[UserController::class,'create']);
    Route::post('store',[UserController::class,'store']);
    Route::post('delete',[UserController::class,'destroy']);
});
// Role
Route::prefix('role')->group(function()  {
    Route::get('show',[UserRoleController::class,'show']);
    Route::get('create',[UserRoleController::class,'create']);
    Route::post('store',[UserRoleController::class,'store']);
    Route::get('delete/{id}',[UserRoleController::class,'destroy']);
});
// Api calls
Route::prefix('api')->group(function()  {
    Route::prefix('task')->group(function()  {
        Route::post('store',[ApiController::class,'task_store']);
        Route::put('move/{id}',[ApiController::class,'task_move']);
        Route::post('task_cards/show/{id}',[ApiController::class,'task_cards_show']);
    });
    Route::prefix('project')->group(function()  {
        Route::post('stage/store',[ApiController::class,'stage_store']);
        Route::get('stage/delete/{id}',[ApiController::class,'stage_delete']);
        Route::get('stage/update/{id}',[ApiController::class,'stage_update']);
        Route::post('task_cards/show/{id}',[ApiController::class,'task_cards_show']);
    });
    Route::get('delete/{id}',[ApiController::class,'destroy']);
});
// Route::get('drag',function(){return view('task.drag');});

});
