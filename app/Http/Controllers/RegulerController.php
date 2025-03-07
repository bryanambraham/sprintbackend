<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegulerResource;
use App\Models\reguler;
use Illuminate\Http\Request;

class RegulerController extends Controller
{
    //
    public function getMobil(){
        $reguler = reguler::all();

        return RegulerResource::collection($reguler);
    }
}
