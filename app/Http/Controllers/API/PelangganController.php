<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Pelanggan;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::all();
        return response()->json([
            'pelanggan'=>$pelanggan,
            ], 200);
    }
}
