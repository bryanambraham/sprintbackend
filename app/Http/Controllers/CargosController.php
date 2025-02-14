<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cargodarat;
use App\Models\cargolaut;
use App\Models\cargoudara;
use App\Models\cargomobil;
use App\Http\Resources\CargoResource;

class CargosController extends Controller
{
    public function search(Request $request)
    {
        $type = $request->input('type'); // 'darat', 'laut', 'udara', 'mobil'
        $destination = $request->input('destination');

        $cargo = null;

        switch ($type) {
            case 'darat':
                $cargo = cargodarat::where('destination', $destination)->get();
                break;
            case 'laut':
                $cargo = cargolaut::where('destination', $destination)->get();
                break;
            case 'udara':
                $cargo = cargoudara::where('destination', $destination)->get();
                break;
            case 'mobil':
                $cargo = cargomobil::where('destination', $destination)->get();
                break;
            default:
                return response()->json(['error' => 'Invalid cargo type'], 400);
        }

        return CargosResource::collection($cargo);
    }
}
