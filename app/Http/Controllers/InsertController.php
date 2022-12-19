<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\InsertController;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    public function index(Request $request){
        
        $dados = [
            'nome'=>$request->input('NomeCompleto'),
            'dNascimento'=>$request->input('DataNascimento'),
            'WhatsApp'=>$request->input('WhatsApp'),
            'fotoP'=>$request->input('Foto')
        ];

        return view('insertPaciente', $dados);
    }
}
