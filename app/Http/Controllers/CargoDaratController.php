<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\darat;
use App\Http\Resources\CargoDaratResource;

class CargoDaratController extends Controller
{
    //
    public function getDarat(){
        $darat = darat::all();

        return CargoDaratResource::collection($darat);
    }
}
