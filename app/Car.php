<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['marca', 'modello', 'targa', 'nome_proprietario', 'cognome_proprietario'];
}
