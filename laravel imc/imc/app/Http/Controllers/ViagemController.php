<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViagemModel;

class ViagemController extends Controller
{
    public function dadosgasto()
    {
        return view('formsviagem');
    }

    public function calcular(Request $request)
    {
        $request->validate([
            'combustivel' => 'required|string',
            'valor' => 'required|numeric|min:0',
            'distancia' => 'required|numeric|min:0',
            'consumo' => 'required|numeric|min:0'
        ]);

        // Pegando os dados do formulário
        $combustivel = $request->input('combustivel');
        $valorCombustivel = $request->input('valor');
        $distancia = $request->input('distancia');
        $consumo = $request->input('consumo');

        // Chamando o modelo para calcular
        $gastoTotal = ViagemModel::calcularGasto($valorCombustivel, $distancia, $consumo);

        // Retornando a view de resultado
        return view('viagem', [
            'gastoTotal' => $gastoTotal,
            'combustivel' => $combustivel
        ]);
    }
}