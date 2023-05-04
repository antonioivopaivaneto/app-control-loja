<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome','categoria_id','preco_custo','preco_venda','estoque'];

    public function categorias(){
        return $this->hasOne('App\Models\Categoria','id','categoria_id');
    }

    public function estoque(){
        return $this->hasOne('App\Models\Estoque','produto_id','id');
    }

    public function movimentacao(){
        return $this->hasMany(Movimentacao::class);
    }


}
