<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcalculadoraController extends Controller
{
    public function index()
    {
        return view('index');
    }

    
    public function calcular(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $operador =$request->operador;

        if($operador == '+') {
            $result = $num1 + $num2;
        }
        if ($operador == '-') {
            $result = $num1 - $num2;
        }
        if ($operador == '*') {
            $result = $num1 * $num2;
        }
        if ($operador == '/') {
            if ($num2 == 0) {
                $result = "Número 2 deve ser diferente de 0";
            } else {
                $result = $num1 / $num2;
            }
        }
        return view('resultado', compact('result'));        
    }
    
}
