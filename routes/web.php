<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

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
})
->name('home');
Route::get('/login', function () {
    return view('login');
})
->name('login');

Route::get('/login', [LoginController::class, 'LoginPage'])->name('login');
Route::post('/submitform', [LoginController::class, 'submitform'])->name('submitform');





Route::get('/contact', [ContactController::class, 'contactPage'])->name('contact');
Route::post('/submitdata', [ContactController::class, 'submitdata'])->name('submitdata');



Route::get('/about',[AboutController::class,'AboutPage'])->name('about');
Route::post('/submit',[AboutController::class,'submit'])->name('submit');

Route::get('/login', [LoginController::class, 'LoginPage'])->name('login');
Route::post('/registerstore', [LoginController::class, 'registerstore'])->name('registerstore');

Route::get('/register', [LoginController::class, 'RegisterPage'])->name('register');
Route::post('/loginstore', [LoginController::class, 'loginstore'])->name('loginstore');
