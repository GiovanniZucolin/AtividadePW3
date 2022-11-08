@section('content')

<section class="sec-produto">

	<h1> Cadastre o Produto </h1>

	<form action="{{url('/produto-alterar/'.$produto->idProduto)}}" method="post" class="form-produtos">
	{{csrf_field()}}	

		<div class="div-inputs">
			<input type="text" placeholder="Categoria" name="txCategoria" value="{{$produto->idCategoria}}">
		</div>

		<div class="div-inputs">
			<input type="text" placeholder="Produto" name="txProduto" value="{{$produto->produto}}">
		</div>

		<div class="div-inputs">
			<input type="text" placeholder="Valor" name="txValor" value="{{$produto->valor}}">
		</div>

		<div class="div-inputs">
			<input type="text" placeholder="Imagem" name="txImagem" value="">
		</div>

		<div class="div-inputs">
			<input type="submit" value="Salvar" class="btn-salvar">
		</div>
	</form>
	
</section>