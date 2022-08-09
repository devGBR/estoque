@extends('principal')

@section('conteudo')
        <h1>Listagem de produtos com Laravel</h1>
        <table class="table table-hover table-bordered table-striped">
            <?php foreach ($produtos as $p): ?>
        <tr>
            <td><?= $p->nome ?></td>
            <td><?= $p->valor ?></td>
            <td><?= $p->descricao ?></td>
            <td><?= $p->quantidade ?></td>
            <td>
                <a href="/produtos/mostra/<?= $p->id ?>">
                    <span class = "glyphicon glyphicon-search"></sapn>
                </a>

            </td>
        </tr>
        <?php endforeach ?>
        </table>

@stop