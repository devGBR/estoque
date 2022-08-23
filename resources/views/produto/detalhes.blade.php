 @extends('layout.principal')
  
  <title>Detalhes do Produto: {{$p->nome}} </title>

 @section('conteudo') 

        <h1  id = "title">Detalhes do Produto: {{$p->nome}}</h1>
            <ul class = " list-group-flush">
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
                    <a href = '/produtos/remove/<?= $p->id ?>' class = "lixeira">
                        <span class = "glyphicon glyphicon-trash"></span> Excluir
                    </a>
                </li>
                </li>
                    <a href = '/produtos/alterar/<?= $p->id ?>' class = 'editar'>
                        <span class = "glyphicon glyphicon-pencil"></span> Editar
                    </a>
                </li>        
            </ul>
@stop

