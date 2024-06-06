<?php
// WEB.PHP

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteappController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [UserController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [UserController::class, 'index']);
Route::get('/createNote', [NoteappController::class, 'showNote']);
Route::get('/displayNote', [NoteappController::class, 'displayNote']);
Route::get('/viewNote/{id}', [NoteappController::class, 'show']);
Route::get('/displayNote/edit/{id}', [NoteappController::class, 'edit']);
Route::get('/displayNote/delete/{id}', [NoteappController::class, 'delete']);


Route::post('/register', [UserController::class, 'register']);
Route::post('/noteApp_process', [NoteappController::class, 'addNote']);
Route::post('/displayNote/edit/{id}', [NoteappController::class, 'update']);

Route::resource('/student', StudentController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
