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

    //site de client
    Route::get('/', function () { return view('client.index'); })->name('client.home');
    Route::get('/about', function () { return view('client.about'); })->name('client.about');
    Route::get('/contact', function () { return view('client.contact'); })->name('client.contact');
    Route::get('/faqs', function () { return view('client.faqs'); })->name('client.faqs');
    Route::get('/general_advices', function () { return view('client.general_advices'); })->name('client.general_a');
    Route::get('/our_social_projects', function () { return view('client.our_social_projects'); })->name('client.osp');
    Route::get('/prepare_your_travel_to_morocco', function () { return view('client.prepare_your_travel_to_morocco'); })->name('client.prepareTravel');
    Route::get('/videos', function () { return view('client.videos'); })->name('client.videos');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    //home
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('store_image', [App\Http\Controllers\ImageController::class, 'store'])->name('image.store');
    Route::get('delete_image', [App\Http\Controllers\ImageController::class, 'delete'])->name('image.delete');
    Route::put('edit_image', [App\Http\Controllers\ImageController::class, 'edit'])->name('image.edit');
    //Route::get('update/{image:id}', [App\Http\Controllers\ImageController::class, 'update'])->name('image.update');

    //osp
    Route::get('osp', function () { return view('admin.pages.OSP.OSP'); })->name('osp');

    //contact
    Route::get('adminContact', [App\Http\Controllers\ImageController::class, 'contact'])->name('contact');
    Route::post('store_contactimg', [App\Http\Controllers\ImageController::class, 'store'])->name('contactimg.store');
    Route::get('delete_contactimg', [App\Http\Controllers\ImageController::class, 'delete'])->name('contactimg.delete');
    Route::put('edit_contactimg', [App\Http\Controllers\ImageController::class, 'edit'])->name('contactimg.edit');

    //trips
    Route::get('trips', [App\Http\Controllers\TripController::class, 'index'])->name('trips.index');
    Route::post('store_trip', [App\Http\Controllers\TripController::class, 'store'])->name('trips.store');
    Route::get('delete_trip', [App\Http\Controllers\TripController::class, 'delete'])->name('trips.delete');
    Route::get('update_trip/{id}', [App\Http\Controllers\TripController::class, 'update'])->name('trips.update');
    Route::put('edit_trip/{id}', [App\Http\Controllers\TripController::class, 'edit'])->name('trips.edit');
    Route::get('show/{id}', [App\Http\Controllers\TripController::class, 'show'])->name('trips.show');
    Route::get('hide/{id}', [App\Http\Controllers\TripController::class, 'hide'])->name('trips.hide');

    
    //page ckeditor
    Route::post('ck/upload', [App\Http\Controllers\ckupload::class, 'ckupload'])->name('ck.upload');
    Route::post('ck/page', [App\Http\Controllers\PageController::class, 'store'])->name('page.store');
});


