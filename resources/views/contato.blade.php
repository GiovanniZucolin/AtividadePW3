@extends('templates.default')
@section('content')

<h1>Entre em Contato</h1>

<form action="{{url('/api/contato')}}" method="post" class="form-produtos">
	{{csrf_field()}}


	<div class="div-inputs">
		<input type="text" name="txNome" placeholder="Nome" />
	</div>
	
	<div class="div-inputs">
		<input type="text" name="txEmail" placeholder="E-mail" />
	</div>

	<div class="div-inputs">
		<input type="text" name="txTelefone" placeholder="Telefone" />
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
			<th> Telefone </th>
			<th> Assunto </th>
			<th> Mensagem </th>
			<th> &nbsp </th>
			<th> &nbsp </th>
			<th> &nbsp </th>
		</tr>
		@foreach($contato as $c)
	    <tr>
			<td align="center"> {{$c->idContato}} </td>
			<td align="center"> {{$c->nome}} </td>
			<td> {{$c->email}} </td>
			<td> {{$c->telefone}} </td>
			<td> {{$c->assunto}} </td>
			<td> {{$c->mensagem}} </td>
			<td> <a href="/contato/{{$c->idContato}}"> Excluir </a> </td>
			<td> <a href="/contato-editar/{{$c->idContato}}/editar"> Editar </a> </td>
			<td> <a href="/api/contato/{{$c->idContato}}"> JSON </a> </td>
		</tr>	
		@endforeach
	</table>
</div>

</section>

@endsection