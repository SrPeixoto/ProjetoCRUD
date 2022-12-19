<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        
        //$situação_modalCons = $request->query('Produto');

        return view('home');
    }

    
}
