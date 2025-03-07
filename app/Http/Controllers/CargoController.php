<?php

namespace App\Http\Controllers;

use App\Http\Resources\CargoResource;
use App\Models\cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    //
    public function getMobil(){
        $cargo = cargo::all();

        return CargoResource::collection($cargo);
    }
}
