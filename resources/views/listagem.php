<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Productos</title>
    <style>
        table, th, td {
            border: 1px solid black;
            }
    </style>
</head>
<body>
    <h1>Listagem de produtos com Laravel</h1>
    <table>
        <?php foreach ($produtos as $p): ?>
    <tr>
        <td><?= $p->nome ?></td>
        <td><?= $p->valor ?></td>
        <td><?= $p->descricao ?></td>
        <td><?= $p->quantidade ?></td>
    </tr>
    <?php endforeach ?>
    </table>
</body>
</html>