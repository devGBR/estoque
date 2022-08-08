<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de estoque</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<body> 
    <div class="container">

        <h1>Listagem de produtos com Laravel</h1>
        <table class="table table-hover table-bordered table-striped">
            <?php foreach ($produtos as $p): ?>
        <tr>
            <td><?= $p->nome ?></td>
            <td><?= $p->valor ?></td>
            <td><?= $p->descricao ?></td>
            <td><?= $p->quantidade ?></td>
            <td>
                <a href="/produtos/mostra?id=<?= $p->id ?>">
                    <span class = "glyphicon glyphicon-search"></sapn>
                </a>

            </td>
        </tr>
        <?php endforeach ?>
        </table>

    </div>
    <script src="/js/app.js"></script>
</body>
</html>