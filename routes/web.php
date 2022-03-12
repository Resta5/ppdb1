<?php

use App\Http\Controllers\dataPesertaController;
use App\Http\Controllers\BerkasPesertaController;
use App\Http\Controllers\CetakLaporanController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    [
        'register' => false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function (){

    Route::get('admin', function() {
        return view('dataPeserta.index');
    })->middleware(['role:admin']);

    Route::get('admin', function() {
        return view('berkasPeserta.index');
});

        Route::get('cetakDataPeserta', [App\Http\Controllers\dataPesertaController::class, 'cetakDataPeserta'])->name('cetakDataPeserta');

        Route::resource('dataPeserta', dataPesertaController::class);
        Route::resource('berkasPeserta', berkasPesertaController::class);
        Route::resource('admin', adminController::class);
});


    // Route peserta
        Route::get('cetak', function() {
            return view('cetak.index');
    });
        Route::resource('dataPeserta', dataPesertaController::class);
        Route::resource('cetak', laporanController::class);
        Route::resource('berkasPeserta', berkasPesertaController::class);
        Route::get('cetak-datapeserta', [dataPesertaController::class, 'cetakDataPeserta']);

    Route::get('motivasi', function(){
        return view('motivasi');
    });
    Route::get('welcome', function(){
        return view('welcome');
    });
    Route::get('tentang', function(){
        return view('tentang');
    });
    Route::get('lokasi', function(){
        return view('lokasi');
    });
    Route::get('blog', function(){
        return view('blog');
    });

Route::get('email', [EmailController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ->middleware(['role:admin']);
