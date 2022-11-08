@extends('templates.default')
@section('content')

<section class="sec-produto">

	<h1> Cadastre o Produto </h1>

	<form action="{{url('/produto/inserir')}}" method="post" class="form-produtos">
	{{csrf_field()}}	

		<div class="div-inputs">
			<input type="text" placeholder="Categoria" name="txCategoria" value="">
		</div>

		<div class="div-inputs">
			<input type="text" placeholder="Produto" name="txProduto">
		</div>

		<div class="div-inputs">
			<input type="text" placeholder="Valor" name="txValor" value="">
		</div>

		<div class="div-inputs">
			<input type="text" placeholder="Imagem" name="txImagem" value="">
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
			<th> Id Produto </th>
			<th> Id Categoria </th>
			<th> Produto </th>
			<th> Valor</th>		
			<th> &nbsp </th>
			<th> &nbsp </th>	
		</tr>
		@foreach($produto as $prod)
	    <tr>
			<td width="100px" align="center"> {{$prod->idProduto}} </td>
			<td width="100px" align="center"> {{$prod->idCategoria}} </td>
			<td width="450px"> {{$prod->produto}} </td>
			<td width="450px"> R${{$prod->valor}} </td>
			<td> <a href="/produto/{{$prod->idProduto}}"> Excluir </a> </td>
			<td> <a href="/produto-editar/{{$prod->idProduto}}/editar"> Editar </a> </td>
		</tr>	
		@endforeach
	</table>
</div>

</section>

@endsection