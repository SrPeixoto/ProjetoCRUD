<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){
        
        $dados = [
            'id'=>$request->input('id')
        ];

        return view('home', $dados);
    }

    
}
