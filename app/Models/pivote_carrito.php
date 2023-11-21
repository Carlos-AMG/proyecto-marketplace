<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pivote_carrito extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'producto_id', 'quantity'];
}
