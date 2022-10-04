<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = "tbPedido";

    protected $fillable = ['idPedido', 'idProduto', 'idCliente', 'dtPedido'];

    public $timestamps = false;
}
