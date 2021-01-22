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
    return view('home');
})->name('home');

Auth::routes();
Route::match(['get', 'post'], 'register', function () {
    return redirect('/');
});

Route::middleware('role:admin')->get('/adminpanel', [App\Http\Controllers\HomeController::class, 'admin'])->name('adminpanel');
Route::middleware('role:walikelas')->get('/dashboard', [App\Http\Controllers\HomeController::class, 'walikelas'])->name('teacherpanel');

//admin content route
Route::middleware('role:admin')->resource('guru', App\Http\Controllers\WaliKelasController::class);
Route::middleware('role:admin')->resource('siswa', App\Http\Controllers\StudentController::class);
Route::post('/resetsiswa', 'App\Http\Controllers\StudentController@resetsiswa')->name('resetsiswa');
Route::get('/studentexport', 'App\Http\Controllers\StudentController@studentexport')->name('studentexport');
Route::post('/studentimport', 'App\Http\Controllers\StudentController@studentimport')->name('studentimport');


//testview dulu
