@extends('templates.default')
@section('content')

<section>

	<h1> Cadastre a Categoria </h1>

	<form action="categoria-salvar.php" method="post" class="form-produtos">

		<div class="div-inputs">
			<input type="number" name="idCategoria" placeholder="Id Cateoria">
		</div>

		<div class="div-inputs">
			<input type="text" placeholder="Categoria" name="txCategoria">
		</div>

		<div class="div-inputs">
			<input type="submit" value="Salvar" class="btn-salvar">
		</div>
	</form>

</section>

@endsection