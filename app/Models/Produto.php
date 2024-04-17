<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Caso não puxe automaticamente, configure a variavel $table
    protected $table = 'produtos' ;
}
