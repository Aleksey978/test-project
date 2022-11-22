<?php

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
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
//
Route::get('/contact/create', [ContactController::class, 'created'])->name('contact_create');

Route::post('/contact', [ContactController::class, 'store'])->name('contact_store');
Route::get('/contact/{contact}', [ContactController::class, 'show'])->name('contact_show');
Route::get('/contact/{contact}/edit', [ContactController::class, 'edit'])->name('contact_edit');
Route::patch('/contact/{contact}', [ContactController::class, 'update'])->name('contact_update');
Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contact_delete');


Route::get('/contact/update', [ContactController::class, 'update']);
Route::get('/contact/delete', [ContactController::class, 'delete']);
