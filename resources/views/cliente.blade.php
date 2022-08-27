@extends('templates.default')
@section('content')


	<div class="form-box">
		<div class="button-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" id="btn-entrar" onclick="login()"> Entrar </button>
			<button type="button" class="toggle-btn" id="btn-cadastrar" onclick="register()"> Cadastrar </button>
		</div>

		<form action="" method="post" id="formLogin" class="forms login">
			<input type="email" name="email" id="emailLogin" placeholder="e-mail" class="input-field" required> <br />
			<input type="password" name="senha" id="senhaLogin" placeholder="senha" class="input-field" required> <br />
			<input type="submit" value="Entrar" class="btn-submit">
		</form>


		<form action="../Controller/register-user.php" method="post" id="formRegister" class="forms register">
			<input type="text" name="nome" id="nome" placeholder="Nome" class="input-field" required> <br />
			<input type="email" name="email" id="email" placeholder="E-mail" class="input-field" required> <br />
			<input type="password" name="txSenha" id="senha" placeholder="Senha" class="input-field" required> <br />
			<input type="password" name="txRepetirSenha" id="repetirSenha" placeholder="Repetir Senha" class="input-field" required> <br />

			<input type="submit" value="Criar" class="btn-submit">
		</form>


	</div>


<script>
	var formLogin = document.getElementById("formLogin");
	var formRegister = document.getElementById("formRegister");
	var botao = document.getElementById("btn");

	var btnEntrar = document.getElementById("btn-entrar");
	var btnCadastrar = document.getElementById("btn-cadastrar");

	function register() {
		formLogin.style.left = "-400px";
		formRegister.style.left = "50px";
		botao.style.left = "45%";
		btnEntrar.style.color = "#000000";
		btnCadastrar.style.color = "#ffffff";
	}

	function login() {
		formLogin.style.left = "50px";
		formRegister.style.left = "450px";
		botao.style.left = "0";
		btnEntrar.style.color = "#ffffff";
		btnCadastrar.style.color = "#000000";
	}
</script>

@endsection