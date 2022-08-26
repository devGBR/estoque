 @extends('layouts.app')

 @section('content')
 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header"><h1> Editar Produto: {{$p->nome}}</h1></div>
     
        <div class="card-body">
            <div class = "alert ale-danger">

                <span class = "glyphicon glyphicon-warning-sign atention"></span>
                <br>
                <p class = "pgf"> Os campos Quantidade e Valor devem ser preenchidos <br> com numeros positivos </p>
              
            </div>
    
        <form method = "post"> 

            @csrf


            <div class="form-group">
                <label>Nome</label>
                <input type ="text" name = "nome" class="form-control">
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <input type ="text" name = "descricao" class="form-control">
            </div>

            <div class="form-group">
                <label>Valor</label>
                <input type ="text" name = "valor" class = "form-control">
            </div>
            
            <div class="form-group">
                <label>Quantidade</label>
                <input type = "number" name = "quantidade" class = "form-control">
            </div>

            <button type = "Submit" class="btn btn-style
                btn-primary btn-block" name = "alterar">Alterar</button>

        </form>
    </div>
     
     <div class = "max-width mt-5">
       
       @if($errors->any())
            <div class="alert al-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
              </ul>
            </div>
        @endif
           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @stop