 @extends('layout.principal')

 @section('conteudo')
    <h1> Cadastre novo produto</h1>
    
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
                btn-primary btn-block">Adicionar</button>

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
 @stop