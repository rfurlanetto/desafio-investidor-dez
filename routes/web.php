<?php

use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [NoticiaController::class, 'list'])->name('list-noticia');
Route::get('cadastro-noticia', [NoticiaController::class, 'index'])->name('crud-noticia');
Route::get('show-noticia/{slug?}', [NoticiaController::class, 'show']);
Route::post('save-noticia', [NoticiaController::class, 'store'])->name('save-noticia');
