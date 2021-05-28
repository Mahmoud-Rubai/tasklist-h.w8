<?php

use App\Http\Controllers\contactcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/',[contactcontroller::class,'index'] );
Route::get('contact', [contactcontroller::class, 'contact']);
Route::post('store', [contactcontroller::class, 'store']);



