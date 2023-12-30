<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;


    protected $fillable = [
        
        'telefone',
        'name',
        'email',
        'nascimento',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'usuario_contato', 'contato_id', 'user_id');
    }
}
