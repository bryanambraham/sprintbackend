<?php

use App\Http\Resources\BlogResource;
use App\Http\Resources\CargoResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/users', function(){
    return UserResource::collection(User::all());
});

Route::get('/cargo', function(){
    return CargoResource::collection(User::all());
});

Route::get('/blog', function(){
    return BlogResource::collection(User::all());
});
