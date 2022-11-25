<?php

use App\Http\Controllers\Contact\CreatedController;
use App\Http\Controllers\Contact\DestroyController;
use App\Http\Controllers\Contact\EditController;
use App\Http\Controllers\Contact\IndexController;
use App\Http\Controllers\Contact\ShowController;
use App\Http\Controllers\Contact\StoreController;
use App\Http\Controllers\Contact\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('layouts.app');
});

//Route::get('/', function () {
//    return view('layouts.app');
//}) ->name('home');
//
Route::get('/main', [MainController::class, 'index'])->name('main');

Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/contact/create', CreatedController::class)->name('contact_create');

//Route::group(['namespace'=>'Contact'], function () {
//    Route::get('/contact/create', 'CreatedController')->name('contact_create');
//});

Route::post('/contact', StoreController::class)->name('contact_store');
Route::get('/contact/{contact}', ShowController::class)->name('contact_show');
Route::get('/contact/{contact}/edit', EditController::class)->name('contact_edit');
Route::patch('/contact/{contact}', UpdateController::class)->name('contact_update');
Route::delete('/contact/{contact}', DestroyController::class)->name('contact_delete');
//
Route::get('/contact', IndexController::class)->name('contact');
//Route::group(['namespace' => 'Contact'], function (){
//
//
//});





Route::get('/contact/update', [ContactController::class, 'update']);
Route::get('/contact/delete', [ContactController::class, 'delete']);
