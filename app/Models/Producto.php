<?php

namespace App\Models;

use Database\Factories\ProductoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factura;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    // Para indicar que no se guarde un dato en cierta columna
    public $timestamps = false;


    // public function cart(){
    //     return $this->belongsToMany(Cart::class,'pivote_carritos');
    // }

    public function cart()
    {
        return $this->belongsToMany(Cart::class,'pivote_carrito');
    }

    public function Departamento(){
        return $this->belongsTo(Departamento::class);
    }

    public function Detalle_Facturas(){
        return $this->belongsToMany(Factura::class,'Detalle_Factuar');
    }

    protected $fillable = ['nombre','existencia','precio','descripcion','imagen','departamento_id'];
}
