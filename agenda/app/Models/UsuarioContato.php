<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioContato extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'contato_id'];
}
