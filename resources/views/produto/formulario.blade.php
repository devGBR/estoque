 @extends('layouts.app')
    
 @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header"><h1> Cadastre novo produto</h1></div>
                        
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
                                    <input type ="text" name = "nome" class="form-control" value = "{{old('nome')}}">
                                </div>

                                <div class="form-group">
                                    <label>Descrição</label>
                                    <input type ="text" name = "descricao" class="form-control" value = "{{old('descricao')}}">
                                </div>

                                <div class="form-group">
                                    <label>Valor</label>
                                    <input type ="text" name = "valor" class = "form-control" value = "{{old('valor')}}">
                                </div>

                                <div class="form-group">
                                    <label>Quantidade</label>
                                    <input type = "number" name = "quantidade" class = "form-control" value = "{{old('quantidade')}}">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @stop