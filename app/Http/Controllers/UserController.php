<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('producto/index_producto',['productos'=>$productos]);
    }
    public function facturas(){
        $user = Auth::user();
        $facturas = Factura::all()->where('user_id',$user->id);
        
        return view('factura/index_factura',['facturas'=>$facturas]);
    }
    public function perfil(){

    }
}
