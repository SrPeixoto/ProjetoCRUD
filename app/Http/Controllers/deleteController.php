<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\deleteController;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    public function index(Request $request){
       
        $dados = [
            'id'=>$request->input('id')
        ];

        return view('deletePaciente', $dados);
    }


    
    public function abrir_modalCons($situação_modalCons){

        echo $situação_modalCons;

    }
}
