@extends('templates.default')
@section('content')


<section>

	<h1> Consultar Pedidos </h1>

	<form action="{{url('/pedido/inserir')}}" method="post" class="form-produtos">
	{{csrf_field()}}

		<div class="div-inputs">
			<input type="text" placeholder="Id Produto" name="txidProduto">
		</div>

		<div class="div-inputs">
			<input type="text" placeholder="Id Cliente" name="txidCliente">
		</div>			
		
		<div class="div-inputs">
			<label for="dataPedido">Data do Pedido</label> <br />
			<input type="date" id="dataPedido" name="dataPedido">>
		</div>

		<div class="div-inputs">			
			<input type="submit" value="Salvar" class="btn-salvar">
		</div>
	</form>

</section>

<section>

<div class="table-categoria">
	<table border="1" rules="all">
		<tr>
			<th> Id Pedido </th>
			<th> Id Produto </th>
			<th> Id Cliente </th>
			<th> Data do Pedido </th>			
		</tr>
		@foreach($pedido as $ped)
	    <tr>
			<td align="center"> {{$ped->idPedido}} </td>
			<td align="center"> {{$ped->idProduto}} </td>
			<td align="center"> {{$ped->idCliente}} </td>
			<td> {{$ped->dtPedito}} </td>			
		</tr>	
		@endforeach
	</table>
</div>

</section>


@endsection