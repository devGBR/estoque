 @extends('principal')
  
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
@stop

