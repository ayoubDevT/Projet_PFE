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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    Route::get('/', function () { return view('admin.dashboard-one'); })->name('dash');
    
    //slider
    Route::get('/home', [App\Http\Controllers\ImageController::class, 'index'])->name('home');
    Route::post('/store', [App\Http\Controllers\ImageController::class, 'store'])->name('image.store');
    Route::get('/delete', [App\Http\Controllers\ImageController::class, 'delete'])->name('image.delete');
    Route::get('/update', [App\Http\Controllers\ImageController::class, 'update'])->name('image.update');

    //page ckeditor
    Route::post('ck/upload', [App\Http\Controllers\ckupload::class, 'ckupload'])->name('ck.upload');
    Route::post('ck/page', [App\Http\Controllers\PageController::class, 'store'])->name('page.store');
});


