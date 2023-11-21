<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('user/dashboard',['productos'=>$productos]);
    }
    public function facturas(){

    }
    public function pagar(){

    }
    public function perfil(){

    }
}
