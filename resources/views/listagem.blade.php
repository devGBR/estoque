@extends('principal')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@section('conteudo')

        @if(empty($produtos))
            <div class="alert alert-danger">
                Você não tem nenhum produto cadastrado.
            </div>
        @else

            <h1>Listagem de produtos</h1>
                <table class="table table-hover table-bordered table-striped">
                    @foreach ($produtos as $p): 
                        <tr>
                            <td>{{$p->nome}}</td>
                            <td>{{$p->valor}}</td>
                            <td>{{$p->descricao}}</td>
                            <td>{{$p->quantidade}}</td>
                            <td>
                                <a href="/produtos/mostra/<?= $p->id ?>">
                                    <span class = "glyphicon glyphicon-search"></span>
                                </a>
                            </td>
                       </tr>
                    @endforeach
            </table>
        @endif
@stop