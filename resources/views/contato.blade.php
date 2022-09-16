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

<div class="table-categoria">
	<table border="1" rules="all">
		<tr>
			<th> Id </th>
			<th> Nome </th>
			<th> Email </th>
			<th> Assunto </th>
			<th> Mensagem </th>
		</tr>
		@foreach($contato as $c)
	    <tr>
			<td width="50px" align="center"> {{$c->idContato}} </td>
			<td width="100px" align="center"> {{$c->nome}} </td>
			<td width="100px"> {{$c->email}} </td>
			<td width="400px"> {{$c->assunto}} </td>
			<td width="450px"> {{$c->mensagem}} </td>
		</tr>	
		@endforeach
	</table>
</div>

</section>

@endsection