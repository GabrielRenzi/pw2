<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SonoModel;

class SonoController extends Controller
{
    public function dadossono() {
        return view('formssono');
    }

    public function sono() {
        $sonomodel = new SonoModel();
        $resultadosono = $sonomodel->sono();
        return view('sono',compact('resultadosono'));
    }
}
