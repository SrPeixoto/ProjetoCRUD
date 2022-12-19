<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\updateController;
use Illuminate\Support\Facades\DB;

class updateController extends Controller
{
    public function index(Request $request){
        
        $dados = [
            'id'=>$request->input('id'),
            'nome'=>$request->input('NomeCompleto'),
            'dNascimento'=>$request->input('DataNascimento'),
            'WhatsApp'=>$request->input('WhatsApp'),
            'fotoP'=>$request->input('Foto')
        ];

        return view('updatePaciente', $dados);
    }
}
