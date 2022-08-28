@extends('templates.default')
@section('content')

    <section class="pedido">
        <h1> Pedido </h1>

        <form action="" method="post" class="form-produtos">

            <div class="div-inputs">
			    <input type="text" placeholder="Produto" name="txProduto">
		    </div>
            <div class="div-inputs">
			    <input type="text" placeholder="Cliente" name="txCliente">
		    </div>
            <div class="div-inputs">
			    <input type="text" placeholder="Data" name="txData">
		    </div>
		    <div class="div-inputs">
			    <input type="submit" value="Salvar" class="btn-salvar">
		    </div>

	    </form>
    </section>

@endsection