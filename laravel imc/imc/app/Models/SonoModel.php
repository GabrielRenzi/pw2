<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SonoModel extends Model
{
    function calcula_sono($horas) {
        if ($horas < 6) {
            return "Você está dormindo pouco";
        } elseif ($horas < 8) {
            return "Você está dormindo o suficiente";
        } else {
            return "Você está dormindo muito";
        }
    }

    public function sono() {
        $valores["nome"] = $_GET["nome"];
        $valores["idade"] = $_GET["idade"];
        $valores["horas"] = $_GET["horas"];
        $valores["classificacaosono"] = $this->calcula_sono($valores["horas"]);
        return $valores;
    }
}
