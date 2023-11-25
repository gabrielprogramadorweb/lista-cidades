<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class DadoController extends Controller
{
    public function index()
    {
        $dados = Cidade::all();
        return view('principal', compact('dados'));
    }
    public function inserirDado()
    {// Supondo que você queira atualizar a cidade e a população para o ID 1
        try {
            $novoDado = Cidade::create([
                'cidade' => 'Exemplo Cidade',
                'populacao' => 1000000,
                'populacao_ano_passado' => 900000,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        
    }
}
