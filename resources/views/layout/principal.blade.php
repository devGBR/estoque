 <!DOCTYPE html>
<html lang = "pt_BR">
    <head>
        <title>Controle de estoque</title>
        <link rel  =  "stylesheet" href = "/css/app.css">
        <link rel  =  "stylesheet" href = "/css/styleadc.css">
        <link href  =  "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel = "stylesheet">
    </head>
        <body>

            <div class = "container">

            <nav class = "navbar navbar-default">
                <div class = "container-fluid">

                    <div class = "navbar-header">

                        <a class = "navbar-brand" href = "/produtos">
                            GETQ-ESTOQUE
                        </a> 

                    </div>

                    <ul class = "nav navbar-nav navbar-right nav-label">
                        <li class = "new">
                            <a href = "{{action('ProdutoController@lista')}}"> Listagem </a>
                        </li>

                        <li>
                            <a href = "{{action('ProdutoController@novo')}}"> Novo </a>
                        </li>
                        @if(route::get('/produtos/mostra/{id}', 'ProdutoController@mostra'))
                            <li>
                                <a href = '/produtos/remove/<?= $p->id ?>' class = "lixeira">
                                        <span class = "glyphicon glyphicon-trash"></span>
                                </a>
                            </li>
                        @endif
                    </ul>

                </div>
            </nav>
                @yield('conteudo')

                <footer class = "footer">
                    <p> &copy; Gerenciador de estoque - GETQ</p>
                </footer>

            </div>

            <script src = "/js/app.js"></script>
        </body>
</html>