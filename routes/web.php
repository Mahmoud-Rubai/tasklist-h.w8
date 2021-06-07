<?php

use App\Http\Controllers\contactcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/',[contactcontroller::class,'index'] );
Route::get('contact', [contactcontroller::class, 'contact']);
Route::post('store', [contactcontroller::class, 'store']);

Route::get('contcat.create', [ContcatController::class, 'create'])->name('contcat.create');
Route::get('contcat.edit/{id}', [ContcatController::class, 'edit'])->name('contcat.edit');
Route::put('contcat.update/{id}', [ContcatController::class, 'update'])->name('contcat.update');
Route::delete('contcat.destroy/{id}', [ContcatController::class, 'destroy'])->name('contcat.destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
