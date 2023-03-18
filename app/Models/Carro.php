<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    // Indica o nome da tabela do banco de dados
    protected $table = "carros";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'marca',
        'data_fabricante',
        'cor',
        'carrografia',
        'foto'
    ];
}
