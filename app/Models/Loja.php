<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loja extends Model
{
    use HasFactory;

    public function Loja_Usuario(){
        return $this->belongsToMany(User::class,'Loja_Usuarios','loja_id','id');
    }
}
