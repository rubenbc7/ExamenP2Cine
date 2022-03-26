<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genero;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function index(){
        $generos = Genero::select('id', 'genero')->get();
        return $generos;
        
    }
}