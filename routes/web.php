<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('/trial', [PostsController::class, 'index'])->name('todolist.trial');
Route::post('create', [UserController::class, 'create'])->name('views.welcome');
// Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('todolist.edit');

Route::resource('todolist', PostsController::class);
// Route::get('/todolist', [PostsController::class, 'index']);
