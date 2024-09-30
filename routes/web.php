<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/apps', function () {
    return view('apps');
})->name('apps');

Route::get('/new-apps', function () {
    return view('new-apps');
})->name('new-apps');

Route::get('/change', function () {
    return view('change');
})->name('change');

Route::get('/verify', function () {
    return view('verify');
})->name('verify');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/request', function () {
    return view('request');
})->name('request');

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/content', function () {
    return view('content');
})->name('content');


Route::post('/save', [AppController::class, 'store'])->name('save');

Route::get('/apps', [AppController::class, 'index'])->name('apps');

Route::get('/change/{id}', [AppController::class, 'edit'])->name('change.edit');

Route::put('/change/{id}', [AppController::class, 'update'])->name('change.update');

Route::delete('/change/{id}', [AppController::class, 'destroy'])->name('change.destroy');
