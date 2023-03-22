<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public $timestamps = false; 

    //Relacion entre venta y sus detalles

    public function detalles(){
        return $this->hasMany(Detalle::class);
    }
}
