<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;
class DadoController2 extends Controller
{
    public function getCidades()
    {
        $cidades = Cidade::all();
        return response()->json($cidades);
    }
}
