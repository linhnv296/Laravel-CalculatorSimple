<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CalculatorController extends Controller
{
    public function index(){
        return view('calculator.index');
    }

    public function calculator(Request $request){
        $number1 = $request->number1;
        $number2 = $request->number2;
        $result='';
        if(!empty($request->addition)){
            $result = $number1+$number2;
        }
        if(!empty($request->subtraction)){
            $result = $number1-$number2;
        }
        if(Input::get('multiplication')){
            $result = $number1*$number2;
        }
        if(Input::get('division')){
            if ($number2 !=0){
                $result = $number1/$number2;
            }else{
                $result ="So bi chi phai khac 0";
            }

        }
        return view('calculator.index', compact('result'));
    }
}
