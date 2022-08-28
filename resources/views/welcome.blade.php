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
			<img src="{{url('images/marvel2.jpg')}}" alt="" class="imgPrincipal">
		</div>
	</div>
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

	setInterval(carrosel, 4000);
</script>

@endsection