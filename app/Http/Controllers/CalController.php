<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CalController extends Controller
{

    public function index(){
        return view ('calc');
    }

    public function res(Request $request){
        $text1 = $request->input('txtNumero1');
        $text2 = $request->input('txtNumero2');

        $resul = $text1 .$op. $text1;

    }
}
