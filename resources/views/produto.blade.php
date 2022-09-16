@extends('templates.default')
@section('content')

<section class="sec-produto">

	<h1> Cadastre o Produto </h1>

	<form action="" method="post" class="form-produtos">		

		<div class="div-inputs">
			<input type="text" placeholder="Produto" name="txProduto">
		</div>

		<div class="div-inputs">
			Categoria:
			<select name="SelectCategoria" id="IdCategoria">
				<option value=""> Teste </option>		
			</select>
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
			<th> Valor </th>			
		</tr>
		@foreach($produto as $prod)
	    <tr>
			<td width="100px" align="center"> {{$prod->idProduto}} </td>
			<td width="100px" align="center"> {{$prod->idCategoria}} </td>
			<td width="450px"> {{$prod->produto}} </td>
			<td width="450px"> {{$prod->valor}} </td>			
		</tr>	
		@endforeach
	</table>
</div>

</section>

@endsection