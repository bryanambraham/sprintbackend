<?php

use App\Http\Resources\BlogResource;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\CargosResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\blog;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/users', function(){
    return UserResource::collection(User::all());
});

// Route::get('/getblog', function () {
//     return response()->json([
//         'data' => blog::all(),
//     ]);
// });

// Route untuk mengambil blog posts
Route::get('/getblog', [BlogController::class, 'getBlogPosts']);
Route::get('/getblog/{id}', [BlogController::class, 'getBlogPost']);

// Route baru untuk get blog berdasarkan ID
// Route::get('/getblog/{id}', function ($id) {
//     $artikel = blog::find($id);

//     if (!$artikel) {
//         return response()->json(['message' => 'Artikel tidak ditemukan'], 404);
//     }

//     return response()->json($artikel);
// });

Route::get('/getcargo', function (Request $request) {
    $type = $request->query('type');
    $destination = $request->query('destination');

    // Mapping tipe ke tabel yang benar
    $tables = [
        'darat' => 'cargodarat',
        'laut' => 'cargolaut',
        'udara' => 'cargoudara',
        'mobil' => 'cargomobil',
        'ftl' => 'ftl',
        'cargo' => 'cargo',
        'reguler' => 'reguler',
    ];

    // Jika tipe tidak ditemukan, kembalikan error
    if (!isset($tables[$type])) {
        return response()->json(['error' => 'Invalid cargo type'], 400);
    }

    // Query dari tabel yang sesuai dengan tipe
    $cargo = DB::table($tables[$type])
        ->where('tujuan', 'LIKE', "%$destination%")
        ->get();

    // Jika data kosong, kembalikan array kosong
    if ($cargo->isEmpty()) {
        return response()->json([], 200);
    }

    return response()->json($cargo);
});

Route::get('/getdestinations', function (Request $request) {
    $type = $request->query('type');

    $tables = [
        'darat' => 'cargodarat',
        'laut' => 'cargolaut',
        'udara' => 'cargoudara',
        'mobil' => 'cargomobil',
        'ftl' => 'ftl',
        'cargo' => 'cargo',
        'reguler' => 'reguler',
    ];

    if (!isset($tables[$type])) {
        return response()->json([], 400);
    }

    $destinations = DB::table($tables[$type])->pluck('tujuan');
    return response()->json($destinations);
});

// Route::get('/ongkir', [DataController::class, 'getOngkir']);

// Route::get('/cekdarat', [CargoDaratController::class, 'getDarat']);

// Route::get('/cekudara', [CargoUdaraController::class, 'getUdara']);

// Route::get('/ceklaut', [CargoLautController::class, 'getLaut']);

// Route::get('/cekmobil', [CargoMobilController::class, 'getMobil']);

// Route::get('/getcargo', [CargosController::class, 'search']);



