@extends('templates.default')
@section('content')

<section class="sec-produto">

	<h1> Cadastre o Produto </h1>

	<form action="" method="post" class="form-produtos">

		<div class="div-inputs">
			<input type="number" name="idProduto">
		</div>

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

@endsection