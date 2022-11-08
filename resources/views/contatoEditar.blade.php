@section('content')

<h1>Entre em Contato</h1>

<form action="{{url('/contato-alterar/'.$contato->idContato)}}" method="post" class="form-produtos">
	{{csrf_field()}}


	<div class="div-inputs">
		<input type="text" name="txNome" placeholder="Nome"  value="{{$contato->nome}}"/>
	</div>
	
	<div class="div-inputs">
		<input type="text" name="txEmail" placeholder="E-mail" value="{{$contato->email}}"/>
	</div>

	<div class="div-inputs">
		<input type="text" name="txTelefone" placeholder="Telefone" value="{{$contato->telefone}}"/>
	</div>
	
	<div class="div-inputs">
		<input type="text" name="txAssunto" placeholder="Assunto" value="{{$contato->assunto}}"/>
	</div>
	
	<div class="div-inputs">
		<textarea name="txMensagem" placeholder="Mensagem" value="{{$contato->mensagem}}"></textarea>
	</div>
	
	<div class="div-inputs"> 
		<input type="submit" value="Enviar" class="btn-salvar"/>
	</div>
</form>