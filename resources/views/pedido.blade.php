@extends('templates.default')
@section('content')

<section>

	<h1> Consultar Pedidos </h1>

	<form action="" method="post" class="form-produtos">

		<div class="div-inputs">
			<input type="number" name="idPedido" placeholder="id pedido">
		</div>

		<div class="div-inputs">
			<input type="text" placeholder="Pedido" name="txProduto">
		</div>
		
		<div class="div-inputs">
			<input type="text" placeholder="Valor" name="txValor" value="">
		</div>
		
		<div class="div-inputs">
			<label for="dataPedido">Data do Pedido</label> <br />
			<input type="date" id="dataPedido">
		</div>

		<div class="div-inputs">			
			<input type="submit" value="Salvar" class="btn-salvar">
		</div>
	</form>

</section>

@endsection