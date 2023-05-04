<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['id','nome','quantidade_minima'];

    public function Produtos(){
        return $this->hasMany('App\Models\Produto','categoria_id','id');
    }
}
