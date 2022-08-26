 @extends('layouts.app')
  
  <title>Detalhes do Produto: {{$p->nome}} </title>

 @section('content') 
        <div class = "container">

        <h1  class = "title">Detalhes do Produto: {{$p->nome}}</h1>
            <ul class = " list-group-flush lista">
                <li class="list-group-item">
                    <b>Valor:</b> <br> R$ {{$p->valor}}
                </li>
                <li class="list-group-item">
                    <b>Descrição:</b> <br> {{$p->descricao}}
                </li>
                <li class="list-group-item">
                    <b>Quantidade em estoque:</b> <br> {{$p->quantidade}}
                </li>
            </ul>

            <ul class = "nav navbar-nav navbar-right nav-label">
                <li> 
                    <a href = '/produtos/alterar/<?= $p->id ?>' class = 'editar'>
                        <span class = "glyphicon glyphicon-pencil"></span> Editar
                    </a>
                    <a href = '/produtos/remove/<?= $p->id ?>' class = "lixeira">
                        <span class = "glyphicon glyphicon-trash"></span> Excluir
                    </a>
                </li>       
            </ul>
        </div>
@stop

