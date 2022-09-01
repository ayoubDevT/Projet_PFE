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
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('store_image', [App\Http\Controllers\ImageController::class, 'store'])->name('image.store');
    Route::get('delete_image', [App\Http\Controllers\ImageController::class, 'delete'])->name('image.delete');
    Route::put('edit_image', [App\Http\Controllers\ImageController::class, 'edit'])->name('image.edit');
    //Route::get('update/{image:id}', [App\Http\Controllers\ImageController::class, 'update'])->name('image.update');
    
    //trips
    Route::get('trips', [App\Http\Controllers\TripController::class, 'index'])->name('trips.index');
    Route::post('store_trip', [App\Http\Controllers\TripController::class, 'store'])->name('trips.store');
    Route::get('delete_trip', [App\Http\Controllers\TripController::class, 'delete'])->name('trips.delete');
    Route::get('update_trip/{id}', [App\Http\Controllers\TripController::class, 'update'])->name('trips.update');
    Route::put('edit_trip/{id}', [App\Http\Controllers\TripController::class, 'edit'])->name('trips.edit');
    
    //page ckeditor
    Route::post('ck/upload', [App\Http\Controllers\ckupload::class, 'ckupload'])->name('ck.upload');
    Route::post('ck/page', [App\Http\Controllers\PageController::class, 'store'])->name('page.store');
});


