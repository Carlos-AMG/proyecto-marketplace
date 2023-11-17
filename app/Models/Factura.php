<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Factura extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function Detalle_Factura(){
        return $this->belongsToMany(Producto::class,'Detalle_Factura');
    }

    protected $fillable = ['fecha','user_id'];
}
