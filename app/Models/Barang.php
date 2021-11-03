<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "inventories";

   
   
    public function stock()
    {
        return $this->hasOne(Barang::class, 'id_barang', 'id');
    }
}
