<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SantriController;
use App\Models\Santri;

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
    return view('life');
});
 
Route::get('/a', function () {
    return view('index');
});

// Route::get ('/siswa','SantriController@index');

//halaman utama
Route::get('/siswa', [SantriController::class, 'index'] );
