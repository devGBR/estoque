@extends('layout.principal')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@section('conteudo')

        @if(empty($produtos))
            <div class="alert alert-danger">
                Você não tem nenhum produto cadastrado.
            </div>
        @else

            <h1>Listagem de produtos</h1>
                <table class="table table-hover table-bordered table-striped">
                    @foreach ($produtos as $p) 
                        <tr class = "{{$p->quantidade <= 1 ? 'table-danger' : ''}}">
                            <td>{{$p->nome}}</td>
                            <td> R$ {{$p->valor}}</td>
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
        @foreach ($produtos as $p)
        @if($p->quantidade <= 1)
            <h4>
                <span class = "label pull-right">
                    Um ou menos itens no estoque
                </span>
            </h4>
        @endif
        @endforeach
        @if(old('nome'))
        <div class="alert alert-success">
                <strong>Sucesso!</strong> O produto {{ old('nome') }}  foi adicionado com sucesso.
        </div>
        @endif
@stop