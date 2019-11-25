<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Fitur_Kategori;

class Fitur_KategoriController extends Controller
{
    public function index(){
        $fitur_kategori = Fitur_Kategori::all()->load('Fitur');
        return response()->json([
            'fitur_kategori'=>$fitur_kategori,
            ], 200);
    }
}
