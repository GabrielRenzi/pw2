<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SonoModel extends Model
{

    function classificacao_sono($idade, $horas) {
        if ($idade <= 0.03) {
            if ($horas >= 14 and $horas <=17) {
                return "Horas de sono suficientes";
            } else if($horas >= 18) {
                return "Dormindo demais";
            }
            else {
                return "Horas de sono insuficientes";
            }
            
        } elseif ($idade >= 0.04 and $idade <= 0.11) {
            if ($horas >= 12 and $horas <= 15) {
                return "Horas de sono suficientes";
            } else if($horas >= 16) {
                return "Domindo demais";
            }
            else {
                return "Horas de sono insuficientes";
            }

        } elseif ($idade >= 1 and $idade <= 2) {
            if ($horas >= 11 and $horas <= 14) {
                return "Horas de sono suficientes";
            } else if($horas >= 15) {
                return "Dormindo demais";
            }
            else {
                return "Horas de sono insuficientes";
            }

        } elseif ($idade >= 3 and $idade <= 5) {
            if ($horas >= 10 and $horas <= 13) {
                return "Horas de sono suficientes";
            } else if($horas >= 14) {
                return "Dormindo demais";
            }
            else {
                return "Horas de sono insuficientes";
            }

        } elseif ($idade >= 6 and $idade <= 13) {
            if ($horas >= 9 and $horas <= 11) {
                return "Horas de sono suficientes";
            } else if($horas >= 12) {
                return "Dormindo demais";
            }
            else {
                return "Horas de sono insuficientes";
            }

        } elseif ($idade >= 14 and $idade <= 17) {
            if ($horas >= 8 and $horas <= 10) {
                return "Horas de sono suficientes";
            } else if($horas >= 11) {
                return "Dormindo demais";
            }
            else {
                return "Horas de sono insuficientes";
            }

        } elseif ($idade >= 18 and $idade <= 64) {
            if ($horas >= 7 and $horas <= 9) {
                return "Horas de sono suficientes";
            } else if($horas >= 10) {
                return "Dormindo demais";
            }
            else {
                return "Horas de sono insuficientes";
            }

        } elseif ($idade >= 65) {
            if ($horas >= 7 and $horas <= 8) {
                return "Horas de sono suficientes";
            } else if($horas >= 9) {
                return "Dormindo demais";
            }
            else {
                return "Horas de sono insuficientes";
            }
        }
    }

    public function sono() {
        $valores["nome"] = $_GET["nome"];
        $valores["idade"] = $_GET["idade"];
        $valores["horas"] = $_GET["horas"];
        $valores["classificacaosono"] = $this->classificacao_sono($_GET["idade"], $_GET["horas"]);
        return $valores;
    }
}
