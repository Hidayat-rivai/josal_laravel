<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fitur;

class FiturController extends Controller
{
    public function index(){
        $fitur = Fitur::all();
        return response()->json([
            'fitur'=>$fitur,
            ], 200);
    }
}
