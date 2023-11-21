<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function producto(){
        return $this->hasMany(Producto::class);
    }

    protected $fillable = ['user_id','producto_id','quantity'];
}
