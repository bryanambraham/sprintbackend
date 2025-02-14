<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cargoudara;
use App\Http\Resources\CargoUdaraResource;

class CargoUdaraController extends Controller
{
    //
    public function getUdara(){
        $udara = cargoudara::all();

        return CargoUdaraResource::collection($udara);
    }
}
