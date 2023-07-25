<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\Producto;

class RelacionController extends Controller
{
    public function index(){
        $productos = producto::all();
        return view('welcome',compact('productos'));
    }
}
