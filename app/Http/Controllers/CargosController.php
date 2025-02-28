<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // ✅ Tambahkan ini
use Illuminate\Support\Facades\DB;
use App\Models\cargodarat;
use App\Models\cargolaut;
use App\Models\cargoudara;
use App\Models\cargomobil;
use App\Http\Resources\CargoResource;

class CargosController extends Controller
{
    public function search(Request $request)
    {
        $type = $request->input('type');
        $destination = $request->input('destination');

        // Log data yang diterima
        Log::info('Received type: ' . $type);
        Log::info('Received destination: ' . $destination);

        $cargo = null;

        // Switch untuk mencari berdasarkan tipe pengiriman
        switch ($type) {
            case 'darat':
                $cargo = DB::table('cargodarat')->where('tujuan', 'LIKE', "%$destination%")->get();
                break;
            case 'laut':
                $cargo = DB::table('cargolaut')->where('tujuan', 'LIKE', "%$destination%")->get();
                break;
            case 'udara':
                $cargo = DB::table('cargoudara')->where('tujuan', 'LIKE', "%$destination%")->get();
                break;
            case 'mobil':
                $cargo = DB::table('cargomobil')->where('tujuan', 'LIKE', "%$destination%")->get();
                break;
            default:
                return response()->json(['error' => 'Invalid cargo type'], 400);
        }

        return response()->json($cargo);
    }
}

