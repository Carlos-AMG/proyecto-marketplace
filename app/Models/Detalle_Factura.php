<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Factura extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function Producto(){
        $this->belongsTo(Producto::class);
    }
    public function Factura(){
        $this->belongsTo(Factura::class);
    }

    protected $fillable = ['factura_id','producto_id','cantidad','precio'];
}
