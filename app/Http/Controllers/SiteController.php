<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public  function index(){
        $name = 'Brian';
        $habits = ['volei','academia','estudar', 'programar', 'jogar', 'ler', 'assistir filmes', 'viajar', 'cozinhar', 'correr'];

        return view('home', [
            'name' => $name,
            'habits' => $habits 

        ]);
    }
    

    
        
    
}
