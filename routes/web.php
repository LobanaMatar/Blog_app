<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index'); 
Route::get('create-blog', [BlogController::class, 'create'])->name('blogs.create'); 
Route::post('store-blog', [BlogController::class, 'store'])->name('blogs.store'); 
Route::get('show-blog/(id)', [BlogController::class, 'show'])->name('blogs.show'); 
Route::get('edit-blog/(id)', [BlogController::class, 'edit'])->name('blogs.edit'); 
Route::put('update-blog/(id)', [BlogController::class, 'update'])->name('blogs.update'); 
Route::delete('delete-blog/(id)', [BlogController::class, 'destroy'])->name('blogs.delete'); 
