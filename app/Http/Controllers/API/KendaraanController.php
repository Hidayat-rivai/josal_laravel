<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Kendaraan;

class KendaraanController extends Controller
{
    public function index(){
        $kendaraan = Kendaraan::all();
        return response()->json([
            'kendaraan'=>$kendaraan,
            ], 200);
    }
}
