<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViagemModel extends Model
{
    public static function calcularGasto($valorCombustivel, $distancia, $consumo)
    {
        // Validação dos parâmetros
        if ($valorCombustivel <= 0 || $distancia <= 0 || $consumo <= 0) {
            return 0;
        }

        // Cálculo do gasto total
        $litrosNecessarios = $distancia / $consumo;
        $gastoTotal = $litrosNecessarios * $valorCombustivel;

        return number_format($gastoTotal, 2, '.', '');
    }
}
