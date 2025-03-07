<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CargoDaratResource;
use App\Models\cargodarat;

class CargoDaratController extends Controller
{
    //
    public function getDarat(){
        $darat = cargodarat::all();

        return CargoDaratResource::collection($darat);
    }
}
