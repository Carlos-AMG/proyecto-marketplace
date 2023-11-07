<?php

namespace App\Models;

use Database\Factories\ProductoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detalle_Factura;

class Producto extends Model
{
    use HasFactory;
    // Para indicar que no se guarde un dato en cierta columna
    public $timestamps = false;


    public function Departamento(){
        return $this->belongsTo(Departamento::class);
    }

    public function Detalle_Facturas(){
        return $this->hasMany(Detalle_Factura::class);
    }

    protected $fillable = ['nombre','existencia','precio','descripcion','imagen','departamento_id'];
}
