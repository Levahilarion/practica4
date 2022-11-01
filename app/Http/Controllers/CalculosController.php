<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function fibonacci(Request $request){
        $request->validate([
            'n' => 'required|numeric',
        ]);
        $n = intval($request->n);
        $suma = 0;
        $n1 = 1;

        $fibo  = [0,1];
 
        for($i=2;$i<=$n;$i++)
            {
                $fibo[] = $fibo[$i-1]+$fibo[$i-2];
            }
        
        for ($i=1; $i < $n; $i++) { 
            $temp = $suma;
            $suma = $n1;
            $n2 = $temp + $suma;
            }
                return view('fibonacci', compact('n', 'suma', 'fibo'));
        }
        

    function cadenas(Request $request){
        $request->validate([
            'cadena' => 'required',
        ]);
        $cadena = $request->cadena;
        $total = str_word_count($cadena, 0);
        return view('cadenas', compact('cadena', 'total'));         
    }

    function caracter(Request $request){
        $request->validate([
            'cadena' => 'required',
        ]);
        $cadena = $request->cadena;
        $total = 0;
        $cadena = strtolower($cadena);
        $longitud = strlen($cadena);
    
        for ($i = 0; $i < $longitud; $i++) { 
            if (in_array($cadena[$i], ["a", "e", "i", "o", "u"])) {
                $total++;
            }
        }
        
    return view('caracter', compact('cadena', 'total'));
    }
}