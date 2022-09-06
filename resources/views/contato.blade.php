@extends('templates.default')
@section('content')

<h1>Entre em Contato</h1>

<form action="contato-inserir.php" method="post" class="form-produtos">
	<div class="div-inputs">
		<input type="text" name="txNome" placeholder="Nome" />
	</div>
	
	<div class="div-inputs">
		<input type="text" name="txEmail" placeholder="E-mail" />
	</div>
	
	<div class="div-inputs">
		<input type="text" name="txAssunto" placeholder="Assunto" />
	</div>
	
	<div class="div-inputs">
		<textarea name="txMensagem" placeholder="Mensagem"></textarea>
	</div>
	
	<div class="div-inputs"> 
		<input type="submit" value="Enviar" class="btn-salvar"/>
	</div>
</form>

<section>

	@foreach($contato as $c)
	    <h1> {{$c->idContato}} </h1>
	    <p> {{$c->nome}} </p>
	    <p> {{$c->email}} </P>
		<p> {{$c->assunto}} </P>
		<p> {{$c->mensagem}} </P>
	@endforeach

</section>

@endsection