<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return view('productos./index');
    }

    public function galeria(){
        return view('productos./galeria');
    }
    
    public function formulario(){
        return view('productos./formulario');
    }
}
