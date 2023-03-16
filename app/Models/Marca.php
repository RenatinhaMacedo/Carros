<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    // Indica o nome da tabela do banco de dados
    protected $table = "marca";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'marca',
        'data_fabricante',
        'ano',
        'cor',
        'carrografia',
        'foto'
    ];
}
