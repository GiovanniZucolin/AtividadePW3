<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = "tbProduto";

    protected $fillable = ['idProduto', 'idCategoria', 'produto', 'valor'];

    public $timestamps = false;

    protected $primaryKey = 'idProduto';
}
