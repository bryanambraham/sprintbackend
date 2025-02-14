<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cargomobil;
use App\Http\Resources\CargoMobilResource;

class CargoMobilController extends Controller
{
    //
    public function getMobil(){
        $mobil = cargomobil::all();

        return CargoMobilResource::collection($mobil);
    }
}
