<?php

use Illuminate\Support\Facades\Route;

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
    return view('home/homepage');
});

// Route::get('/admin/home', function () {
//     return view('admin/admin_home');
// });

// Route::get('/login', function () {
//     return view('auth/login');
// });


// Route::get('/', function () {
//     return view('auth.login');
// });

// Auth::routes();
// Route::middleware('auth')->group(function(){
//     Route::get('/', function () {
//     return view('home/homepage');
// });
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');