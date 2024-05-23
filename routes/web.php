<?php
// WEB.PHP

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteappController;


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

Route::get('/index', [UserController::class, 'index']);
Route::get('/viewNote', [NoteappController::class, 'showNote']);
Route::get('/displayNote', [NoteappController::class, 'displayNote']);


Route::post('/register', [UserController::class, 'register']);
Route::post('/noteApp_process', [NoteappController::class, 'addNote']);
