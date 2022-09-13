@extends('templates.default')
@section('content')


<section class="sec-categoria">

	<h1> Cadastre a Categoria </h1>

	<form action="categoria-salvar.php" method="post" class="form-produtos">		

		<div class="div-inputs">
			<input type="text" placeholder="Categoria" name="txCategoria">
		</div>

		<div class="div-inputs">
			<input type="submit" value="Salvar" class="btn-salvar">
		</div>
		
	</form>

	<div class="table-categoria">
	<table border="1" rules="all">
		<tr>
			<th> Id </th>
			<th> Categoria </th>
		</tr>
		@foreach($categoria as $cat)
	    <tr>
			<td> {{$cat->idCategoria}} </td>
			<td> {{$cat->categoria}} </td>
		</tr>	
		@endforeach
	</table>
	</div>

</section>


@endsection