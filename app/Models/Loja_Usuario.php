<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja_Usuario extends Model
{
    use HasFactory;

    public function loja_user(){
        return $this->belongsToMany(User::class);
    }
}
