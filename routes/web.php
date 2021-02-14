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

Auth::routes();
Route::match(['get', 'post'], 'register', function () {
    return redirect('/');
});
Route::get('/', [App\Http\Controllers\LandingController::class, 'home'])->name('home');
Route::middleware('role:admin')->get('/adminpanel', [App\Http\Controllers\HomeController::class, 'admin'])->name('adminpanel');
Route::middleware('role:walikelas')->get('/dashboard', [App\Http\Controllers\HomeController::class, 'walikelas'])->name('teacherpanel');

//admin content route
Route::middleware('role:admin')->resource('guru', App\Http\Controllers\WaliKelasController::class);
Route::middleware('role:admin')->resource('siswa', App\Http\Controllers\StudentController::class);
Route::middleware('role:admin')->resource('raport', App\Http\Controllers\RaportController::class);
Route::middleware('role:admin')->resource('finalraport', App\Http\Controllers\FinalRaportController::class);
Route::middleware('role:admin')->resource('ujiansekolah', App\Http\Controllers\UjianSekolahController::class);
Route::middleware('role:admin')->resource('ujianpraktek', App\Http\Controllers\UjianPraktekController::class);

Route::middleware('role:admin')->group(function () {
    Route::post('/resetsiswa', 'App\Http\Controllers\StudentController@resetsiswa')->name('resetsiswa');
    Route::get('/studentexport', 'App\Http\Controllers\StudentController@studentexport')->name('studentexport');
    Route::post('/studentimport', 'App\Http\Controllers\StudentController@studentimport')->name('studentimport');

    Route::post('/resetraport', 'App\Http\Controllers\RaportController@resetraport')->name('resetraport');
    Route::post('/raportimport', 'App\Http\Controllers\RaportController@raportimport')->name('raportimport');
    Route::get('/refreshraport', 'App\Http\Controllers\FinalRaportController@refreshraport')->name('refreshraport');

    Route::post('/resetujiansekolah', 'App\Http\Controllers\UjianSekolahController@resetujiansekolah')->name('resetujiansekolah');
    Route::post('/ujiansekolahimport', 'App\Http\Controllers\UjianSekolahController@ujiansekolahimport')->name('ujiansekolahimport');

    Route::post('/resetujianpraktek', 'App\Http\Controllers\UjianPraktekController@resetujianpraktek')->name('resetujianpraktek');
    Route::post('/ujianpraktekimport', 'App\Http\Controllers\UjianPraktekController@ujianpraktekimport')->name('ujianpraktekimport');

    //home menu
    Route::patch('/updateadmin', 'App\Http\Controllers\HomeController@updateAdmin')->name('updateAdmin');
    Route::get('/updatechart/{id}', 'App\Http\Controllers\HomeController@updateChart')->name('updateChart');
    Route::get('/datasetsiswa', 'App\Http\Controllers\HomeController@datasetsiswa')->name('datasetsiswa');
    Route::get('/datasetraport', 'App\Http\Controllers\HomeController@datasetraport')->name('datasetraport');
    Route::get('/dataset-us', 'App\Http\Controllers\HomeController@datasetUS')->name('dataset-us');
    Route::get('/dataset-up', 'App\Http\Controllers\HomeController@datasetUP')->name('dataset-up');
});

Route::middleware('role:walikelas')->group(function () {
    //dashboard
    Route::get('/teacherchart', 'App\Http\Controllers\HomeController@teacherChart')->name('teacherChart');
    Route::patch('/updateguru', 'App\Http\Controllers\HomeController@updateGuru')->name('updateguru');

    //data siswa
    Route::get('/infosiswa', 'App\Http\Controllers\HomeController@datasiswa');

    //surat
    Route::get('/skhu', 'App\Http\Controllers\SuratController@SKHU');
    Route::get('/sklu', 'App\Http\Controllers\SuratController@SKLU');
    Route::get('/downloadsklu/{id}', 'App\Http\Controllers\SuratController@DownloadSKLU');
    Route::get('/downloadskhu/{id}', 'App\Http\Controllers\SuratController@DownloadSKHU');


    //nilai
    Route::get('/nilairaport', 'App\Http\Controllers\NilaiController@raport');
    Route::get('/nilaius', 'App\Http\Controllers\NilaiController@ujiansekolah');
    Route::get('/nilaiup', 'App\Http\Controllers\NilaiController@ujianpraktek');
});

Route::middleware('auth')->resource('settings', App\Http\Controllers\SettingsController::class);
