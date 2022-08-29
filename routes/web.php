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
    
    Route::get('/', function () { return view('admin.dashboard-one'); })->name('dashboard');
    Route::get('/chat', function () { return view('admin.pages.apps.chat'); })->name('chat');
    Route::post('ck/upload', [App\Http\Controllers\ckupload::class, 'ckupload'])->name('ck.upload');
    Route::post('ck/page', [App\Http\Controllers\PageController::class, 'store'])->name('page.store');
});


