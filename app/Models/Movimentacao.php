<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;
    protected $table ='movimentacoes' ;

    protected $fillable = [];

    public function produto(){
        return $this->hasOne('App\Models\Produto','id','produto_id');
    }
}
