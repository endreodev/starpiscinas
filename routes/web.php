<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sobre', [PageController::class, 'about'])->name('about');
Route::get('/servicos', [PageController::class, 'services'])->name('services');
Route::get('/orcamento', [PageController::class, 'quote'])->name('quote');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'post'])->name('blog.post');
Route::get('/contato', [PageController::class, 'contact'])->name('contact');

Route::post('/contato', [PageController::class, 'submitContact'])->name('contact.submit');
Route::post('/orcamento', [PageController::class, 'submitQuote'])->name('quote.submit');
