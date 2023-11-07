<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function Detalle_Factura(){
        return $this->hasMany(Detalle_Factura::class);
    }

    protected $fillable = ['fecha','user_id'];
}
