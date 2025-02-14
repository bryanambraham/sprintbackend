<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cargolaut;
use App\Http\Resources\CargoLautResource;

class CargoLautController extends Controller
{
    //
    public function getLaut(){
        $laut = cargolaut::all();

        return CargoLautResource::collection($laut);
    }
}
