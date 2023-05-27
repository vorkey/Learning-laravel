<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// //http://127.0.0.1:8000/
// Route::get('/', function () {
//     return view('welcome');
// });

//http://127.0.0.1:8000/hello ==> <h1>Hello World!</h1>
Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});

//http://127.0.0.1:8000/hello/1 ==> <h1>Hello World 1!</h1>
Route::get('/hello/{id}', function ($id) {
    return "<h1>Hello World $id!</h1>";
})->where('id','[0-9]+');

//http://127.0.0.1:8000/hello/We/1 ==> <h1>Hello We 1!</h1>
Route::get('/hello/{nama}/{id}', function ($nama, $id) {
    return "<h1>Hello $nama $id!</h1>";
})->where(['nama' => '[A-Za-z]+', 'id' => '[0-9]+']);

//
Route::get('siswa', [SiswaController::class, 'index']);
Route::get('siswa/{id}', [SiswaController::class, 'detail'])->where('id', '[0-9]+');

Route::get('/', [HalamanController::class, 'index']);
Route::get('/tentang', [HalamanController::class, 'tentang']);
Route::get('/kontak', [HalamanController::class, 'kontak']);