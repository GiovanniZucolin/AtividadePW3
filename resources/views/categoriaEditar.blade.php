@section('content')


<section class="sec-categoria">

	<h1> Cadastre a Categoria </h1>

	<form action="{{url('/categoria-alterar/'.$categoria->idCategoria)}}" method="post" class="form-produtos">
		{{csrf_field()}}		

		<div class="div-inputs">
			<input type="text" placeholder="Categoria" name="txCategoria" value="{{$categoria->categoria}}">
		</div>

		<div class="div-inputs">
			<input type="submit" value="Salvar" class="btn-salvar">
		</div>
		
	</form>