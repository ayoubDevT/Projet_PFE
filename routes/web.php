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
    Route::post('store_homeimg', [App\Http\Controllers\HomeController::class, 'store'])->name('homeimg.store');
    Route::get('delete_homeimg', [App\Http\Controllers\HomeController::class, 'delete'])->name('homeimg.delete');
    Route::put('edit_homeimg', [App\Http\Controllers\HomeController::class, 'edit'])->name('homeimg.edit');
    //Route::get('update/{image:id}', [App\Http\Controllers\ImageController::class, 'update'])->name('image.update');

    //image
    Route::post('store_image', [App\Http\Controllers\ImageController::class, 'store'])->name('image.store');
    Route::get('delete_image', [App\Http\Controllers\ImageController::class, 'delete'])->name('image.delete');

    //osp
    Route::get('adminOsp', [App\Http\Controllers\ImageController::class, 'osp'])->name('osp');
    

    //more
    Route::get('adminPtm', [App\Http\Controllers\ImageController::class, 'ptm'])->name('ptm');
    Route::get('adminFaqs', [App\Http\Controllers\ImageController::class, 'faqs'])->name('faqs');
    Route::get('adminVideos', [App\Http\Controllers\ImageController::class, 'videos'])->name('videos');
    Route::get('adminGeneral_advices', [App\Http\Controllers\ImageController::class, 'general_advices'])->name('general_advices');


    //contact
    Route::get('adminContact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::post('store_contactimg', [App\Http\Controllers\ContactController::class, 'store'])->name('contactimg.store');
    Route::get('delete_contactimg', [App\Http\Controllers\ContactController::class, 'delete'])->name('contactimg.delete');
    Route::put('edit_contactimg', [App\Http\Controllers\ContactController::class, 'edit'])->name('contactimg.edit');

    //about
    Route::get('adminAbout', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
    Route::post('store_aboutimg', [App\Http\Controllers\AboutController::class, 'store'])->name('aboutimg.store');
    Route::get('delete_aboutimg', [App\Http\Controllers\AboutController::class, 'delete'])->name('aboutimg.delete');
    Route::put('edit_aboutimg', [App\Http\Controllers\AboutController::class, 'edit'])->name('aboutimg.edit');

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


