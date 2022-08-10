 <!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <title>Controle de estoque</title>
        <link rel="stylesheet" href="/css/app.css">
            <style>
                 #title{
                    position: relative;
                    left: 11%;  
                 }
                 .label {
                    background-color: red;
                    color: white;
                    padding: 5px;
                    font-weight: bold;
                    font-size: 1.2em;
                    padding: 0.2em 0.6em;
                    border-radius: 0.5em;
                     }
                     .pull-right {
                        float: right;
                        position: absolute;
                        left: 1060px;
                        }
            </style>
    </head>
        <body>

            <div class="container">

                @yield('conteudo')

            </div>

            <script src="/js/app.js"></script>
        </body>
</html>