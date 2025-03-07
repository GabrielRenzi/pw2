<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $data['email'] = 'gabriel_renzi@hotmail.com';
        return view('contato',$data);
    }
}
