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
Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('client.home');
Route::get('/home/{lang}', [App\Http\Controllers\SiteController::class, 'indexLang'])->name('client.homeLang');
Route::get('/trans/{lang}', [App\Http\Controllers\SiteController::class, 'trans'])->name('client.trans');
Route::get('/about/{lang}', [App\Http\Controllers\SiteController::class, 'about'])->name('client.about');
Route::get('/contact/{lang}', [App\Http\Controllers\SiteController::class, 'contact'])->name('client.contact');
Route::get('/faqs/{lang}', [App\Http\Controllers\SiteController::class, 'faqs'])->name('client.faqs');
Route::get('/general_advices/{lang}', [App\Http\Controllers\SiteController::class, 'general_a'])->name('client.general_a');
Route::get('/our_social_projects/{lang}', [App\Http\Controllers\SiteController::class, 'osp'])->name('client.osp');
Route::get('/prepare_your_travel_to_morocco/{lang}', [App\Http\Controllers\SiteController::class, 'prepareTravel'])->name('client.prepareTravel');
Route::get('/videos/{lang}', [App\Http\Controllers\SiteController::class, 'videos'])->name('client.videos');
Route::get('/trips/{slug}/{lang}', [App\Http\Controllers\SiteController::class, 'tripsCat'])->name('client.tripsCat');
Route::get('/trip/{lang}/{id}', [App\Http\Controllers\SiteController::class, 'trip'])->name('client.trip');
Route::post('/store_booking', [App\Http\Controllers\BookingController::class, 'store'])->name('client.booking.store');
Route::post('/store_message', [App\Http\Controllers\MessageController::class, 'store'])->name('client.message.store');
Route::get('/page_under_construction', function () {
    return view('client.underCons');
})->name('client.undeCon');

//admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dark', function () {
        if (request()->id == 'light') {
            session(['dark' => asset('assets/css/demo_1/style.min.css')]);
        }
        elseif (request()->id == 'dark') {
            session(['dark' => asset('assets/css/demo_2/style.min.css') ]);
        }
        return back();
    })->name('dark');

    //home
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('store_homeimg/{page}', [App\Http\Controllers\HomeController::class, 'store'])->name('homeimg.store');
    Route::get('delete_homeimg', [App\Http\Controllers\HomeController::class, 'delete'])->name('homeimg.delete');
    Route::put('edit_homeimg', [App\Http\Controllers\HomeController::class, 'edit'])->name('homeimg.edit');
    //Route::get('update/{image:id}', [App\Http\Controllers\ImageController::class, 'update'])->name('image.update');

    //image
    Route::post('store_image/{page}', [App\Http\Controllers\ImageController::class, 'store'])->name('image.store');
    Route::get('delete_image', [App\Http\Controllers\ImageController::class, 'delete'])->name('image.delete');

    //osp
    Route::get('adminOsp', [App\Http\Controllers\ImageController::class, 'osp'])->name('osp');

    //tripCAt
    Route::get('Category/{slug}', [App\Http\Controllers\ImageController::class, 'tripsByCat'])->name('tripsCat');


    //more
    Route::get('adminPtm', [App\Http\Controllers\ImageController::class, 'ptm'])->name('ptm');
    Route::get('adminFaqs', [App\Http\Controllers\ImageController::class, 'faqs'])->name('faqs');
    Route::get('adminVideos', [App\Http\Controllers\ImageController::class, 'videos'])->name('videos');
    Route::get('adminGeneral_advices', [App\Http\Controllers\ImageController::class, 'general_advices'])->name('general_advices');


    //contact
    Route::get('adminContact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::post('store_contactimg/{page}', [App\Http\Controllers\ContactController::class, 'store'])->name('contactimg.store');
    Route::get('delete_contactimg', [App\Http\Controllers\ContactController::class, 'delete'])->name('contactimg.delete');
    Route::put('edit_contactimg', [App\Http\Controllers\ContactController::class, 'edit'])->name('contactimg.edit');

    //about
    Route::get('adminAbout', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
    Route::post('store_aboutimg/{page}', [App\Http\Controllers\AboutController::class, 'store'])->name('aboutimg.store');
    Route::get('delete_aboutimg', [App\Http\Controllers\AboutController::class, 'delete'])->name('aboutimg.delete');
    Route::put('edit_aboutimg', [App\Http\Controllers\AboutController::class, 'edit'])->name('aboutimg.edit');

    //trips
    Route::get('tripscrud', [App\Http\Controllers\TripController::class, 'index'])->name('trips.index');
    Route::post('store_trip', [App\Http\Controllers\TripController::class, 'store'])->name('trips.store');
    Route::get('delete_trip', [App\Http\Controllers\TripController::class, 'delete'])->name('trips.delete');
    Route::get('update_trip/{id}', [App\Http\Controllers\TripController::class, 'update'])->name('trips.update');
    Route::put('edit_trip/{id}', [App\Http\Controllers\TripController::class, 'edit'])->name('trips.edit');
    Route::get('show/{id}', [App\Http\Controllers\TripController::class, 'show'])->name('trips.show');
    Route::get('hide/{id}', [App\Http\Controllers\TripController::class, 'hide'])->name('trips.hide');

    //category
    Route::get('category', [App\Http\Controllers\SubController::class, 'index'])->name('category.index');
    Route::post('store_category', [App\Http\Controllers\SubController::class, 'store'])->name('category.store');
    Route::get('delete_category', [App\Http\Controllers\SubController::class, 'delete'])->name('category.delete');
    Route::get('update_category/{id}', [App\Http\Controllers\SubController::class, 'update'])->name('category.update');
    Route::put('edit_category/{slug}', [App\Http\Controllers\SubController::class, 'edit'])->name('category.edit');

    //messages
    Route::get('messages', [App\Http\Controllers\MessageController::class, 'index'])->name('message.index');
    Route::get('delete_message', [App\Http\Controllers\MessageController::class, 'delete'])->name('message.delete');

    //booking
    Route::get('bookings', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
    Route::get('delete_booking', [App\Http\Controllers\BookingController::class, 'delete'])->name('booking.delete');

    //page ckeditor
    Route::post('ck/upload', [App\Http\Controllers\ckupload::class, 'ckupload'])->name('ck.upload');
    Route::put('ck/page/{page}', [App\Http\Controllers\PageController::class, 'store'])->name('page.store');
});
