<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = "tbCategoria";

    protected $fillable = ['idCategoria', 'categoria'];

    public $timestamps = false;
}
