<?php

use Illuminate\Support\Facades\Route;


Route::get('/api-mercadolibre/login',[\JaimeNorato\ApiMercadolibre\Controllers\MercadoLibre::class,'login'])->name('api-mercadolibre.login');
Route::post('/api-mercadolibre/auth',[\JaimeNorato\ApiMercadolibre\Controllers\MercadoLibre::class,'callback'])->name('api-mercadolibre.token');

