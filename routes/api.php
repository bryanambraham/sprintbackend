<?php

use App\Http\Resources\BlogResource;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\CargosResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\blog;
use Illuminate\Support\Facades\Route;

Route::get('/users', function(){
    return UserResource::collection(User::all());
});

Route::get('/getblog', [BlogController::class, 'getBlogs']);

Route::get('/ongkir', [DataController::class, 'getOngkir']);

Route::get('/cekdarat', [CargoDaratController::class, 'getDarat']);

Route::get('/cekudara', [CargoUdaraController::class, 'getUdara']);

Route::get('/ceklaut', [CargoLautController::class, 'getLaut']);

Route::get('/cekmobil', [CargoMobilController::class, 'getMobil']);

Route::get('/getcargo', [CargosController::class, 'search']);


