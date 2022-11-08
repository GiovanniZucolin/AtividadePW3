@extends('templates.default')
@section('content')

<section class="sec-carrossel">
	<div class="div-carrossel">
		<div class="carrossel-container" id="img">
			<img src="{{url('images/the_office.jpg')}}" alt="" class="imgPrincipal">
			<img src="{{url('images/marvel.jpg')}}" alt="" class="imgPrincipal">
			<img src="{{url('images/peaky_blinders.jpg')}}" alt="" class="imgPrincipal">
			<img src="{{url('images/casa_papel.jpg')}}" alt="" class="imgPrincipal">
			<img src="{{url('images/stranger_things.jpg')}}" alt="" class="imgPrincipal">
			<img src="{{url('images/dc.jpg')}}" alt="" class="imgPrincipal">
		</div>
	</div>
</section>

<section class="sec-pesquisa">
	<div class="div-pesquisa">
		<h1>Pesquisar Produto</h1>

		<form action="{{url('/welcome/pesquisa')}}" method="post">	
		{{csrf_field()}}		
		 	<div class="div-inputs">
				<input type="text" name="txProduto" placeholder="Produto" /> <br>
			</div>

			<div class="div-inputs">
				<input type="number" name="valorMin" placeholder="Valor Min." /> <br>
			</div>

			<div class="div-inputs">
				<input type="number" name="valorMax" placeholder="Valor Max." /> <br>
			</div>

			<div class="div-inputs">
				<input type="submit" value="Pesquisar">
			</div>
		</form>
	</div>

	@isset($produto)
	<div class="table-categoria">
	<table border="1" rules="all">
		<tr>
			<th> Categoria </th>
			<th> Produto </th>
			<th> Valor </th>			
		</tr>
		@foreach($produto as $prod)
	    <tr>
			<td width="100px" align="center"> {{$prod->categoria}} </td>
			<td width="450px"> {{$prod->produto}} </td>
			<td width="450px"> R${{$prod->valor}} </td>			
		</tr>	
		@endforeach
	</table>
	</div>
	@endisset

</section>

<script>
	const imgs = document.getElementById("img");
	const img = document.querySelectorAll("#img img");

	let id = 0;

	function carrosel() {
		id++;
		if (id > img.length - 1) {
			id = 0;
		}

		imgs.style.transform = `translateX(${-id * 500}px)`;
	}

	setInterval(carrosel, 5000);
</script>

@endsection