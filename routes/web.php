<?php

use App\Http\Controllers\ActionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;

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

Route::get('/', [NavController::class, 'home']);

Route::get('/characters', [NavController::class, 'characters']);

Route::get('/addCharacter', [NavController::class, 'addCharacter']);

Route::post('/addCharacter', [ActionController::class, 'addCharacter']);

Route::get('/cartoonists', [NavController::class, 'cartoonists']);

Route::get('/addCartoonist', [NavController::class, 'addCartoonist']);

Route::post('/addCartoonist', [ActionController::class, 'addCartoonist']);

Route::post('deleteCharacter', [ActionController::class, 'deleteCharacter']);

Route::post('deleteCartoonist', [ActionController::class, 'deleteCartoonist']);

Route::get('editCharacter', [NavController::class, 'editCharacter']);

Route::post('editCharacter', [ActionController::class, 'editCharacter']);

Route::get('editCartoonist', [NavController::class, 'editCartoonist']);

Route::post('editCartoonist', [ActionController::class, 'editCartoonist']);

// Route::get('/addBook', [NavController::class, 'addBook']);

// Route::post('/addBook', [ActionController::class, 'addBook']);


// Route::get('book/{id}', [NavController::class, 'book']);

