<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>

    <header>
        <nav class="nav-menu">
            <ul>
                <li> <a href="/"> Home </a> </li>
                <li> <a href="/contato"> Contato </a> </li>
                <li> <a href="/cliente"> Cllente </a> </li>
                <li> <a href="/produto"> Produto </a> </li>
                <li> <a href="/pedido"> Pedido </a> </li>
                <li> <a href="/categoria"> Categoria </a> </li>
            </ul>
        </nav>
    </header>


    @yield('content')
    
    <footer>
        <p> Todos os direitos reservados - 2022 </p>
    </footer>

</body>
</html>