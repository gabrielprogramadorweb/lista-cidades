<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dado;
class DadoController2 extends Controller
{
    public function getCidades()
    {
        $cidades = Dado::all();
        return response()->json($cidades);
    }
}
