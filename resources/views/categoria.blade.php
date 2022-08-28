@extends('templates.default')
@section('content')

    <section class="categoria">
        <h1> Categoria </h1>

        <form action="" method="post" class="form-produtos">

            <div class="div-inputs">
			    <input type="text" placeholder="Categoria" name="txCategoria">
		    </div>
		    <div class="div-inputs">
			    <input type="submit" value="Salvar" class="btn-salvar">
		    </div>

	    </form>
    </section>

@endsection