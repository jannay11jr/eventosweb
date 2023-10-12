<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    use HasFactory;

    public function usuarios(){
        return $this->hasMany(Usuario::class);
    }
}
