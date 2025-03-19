<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImcModel extends Model
{
    function calcula_imc($peso, $altura) {
        return round($peso / ($altura * $altura));
    }

    function classificacao_imc($imc) {
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso normal";
        } elseif ($imc < 30) {
            return "Acima do peso (sobrepeso)";
        } elseif ($imc < 35) {
            return "Obesidade I";
        } elseif ($imc < 40) {
            return "Obesidade II";
        } else {
            return "Obsidade III";
        }
    }

    public function imc() {
        $valores["nome"] = $_GET["nome"];
        $valores["peso"] = $_GET["peso"];
        $valores["altura"] = $_GET["altura"];
        $valores["imc"] = $this->calcula_imc($valores["peso"],$valores["altura"]);
        $valores["classificacaoimc"] = $this->classificacao_imc($valores["imc"]);
        return $valores;
    }
}
