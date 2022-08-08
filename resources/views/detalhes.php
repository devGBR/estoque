<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Detalhe do Produto: <?= $p->nome ?></title>
</head>
<body>
    
    <div class="container">
        <h1>Detalhes do Produto: <?= $p->nome ?></h1>
            <ul class = "list-group list-group-flush">
                <li>
                    <b>Valor:</b> <?= $p->valor ?>
                </li>
                <li>
                    <b>Descrição:</b> <?= $p->descricao ?>
                </li>
                <li>
                    <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
                </li>
            </ul>
    </div>


</body>
</html>