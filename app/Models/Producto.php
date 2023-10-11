<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    // Para indicar que no se guarde un dato en cierta columna
    public $timestamps = false;

    /* public function objetos(){
        return $this ->hasMany(Objeto::class);
        objetos que corresponden con el producto
    }*/
    // En el otro modelo
    /*
    public funcion producto(){
        return $this->belongTo(Producto::class);
    }
    */
}
