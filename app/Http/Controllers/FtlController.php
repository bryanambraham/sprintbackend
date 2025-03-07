<?php

namespace App\Http\Controllers;

use App\Http\Resources\FtlResource;
use App\Models\ftl;
use Illuminate\Http\Request;

class FtlController extends Controller
{
    //
    public function getFtl(){
        $ftl = ftl::all();

        return FtlResource::collection($ftl);
    }
}
