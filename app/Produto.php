<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['tipo','modelo','marca','precoVenda','cor','peso','descricao'];
}
