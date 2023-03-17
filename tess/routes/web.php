<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/hai', function () {
    return view('about');
});

Route::get('/files', 'FilesController@index')->name('files.index');
Route::get('/files/add', 'FilesController@create')->name('files.create');
Route::post('/files/add', 'FilesController@store')->name('files.store');




Route::get('/home', function () {
    return view('home');
});

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });

Route::get('/about', 'App\Http\Controllers\PageController@index');


Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');


Route::get('/category', function () {
    return view('category');
});


Route::get('/publisher', function () {
    return view('publisher');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
   });
