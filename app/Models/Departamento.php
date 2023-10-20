<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function Producto(){
        return $this ->hasMany(Producto::class);
    }

    protected $fillable = ['nombre','descripcion'];
}