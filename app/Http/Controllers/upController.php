<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\upController;
use Illuminate\Support\Facades\DB;

class upController extends Controller
{
    public function index(Request $request){

        $dados = [
            'id'=>$request->input('id'),
            'nome'=>$request->input('NomeCompleto'),
            'CPF'=>$request->input('CPF'),
            'dNascimento'=>$request->input('DataNascimento'),
            'WhatsApp'=>$request->input('WhatsApp'),
            'fotoP'=>$request->input('Foto')
        ];

        return view('updateP', $dados);
    }
    
}

