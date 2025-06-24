<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'user' => User::find(1),
    ]);
})->name('home');

Route::get('/about', function () {
    return inertia('About');
})->name('about');


Route::inertia('contact', 'Contact', ['title' => 'Contact Page'])->name('contact');