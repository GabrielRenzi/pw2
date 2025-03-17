<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImcModel; // Ensure this line is correct and the ImcModel class exists in the specified namespace

class ImcController extends Controller
{
    public function dadosimc() {
        return view('dados');
    }

    public function imc() {
        $imcmodel = new ImcModel();
        $resultadoimc = $imcmodel->imc();
        return view('imc',compact('resultadoimc'));
    }
}
