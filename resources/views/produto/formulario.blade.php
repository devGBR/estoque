 @extends('layout.principal')

 @section('conteudo')
    <h1> Cadatre novo produto </h1>
    
        <form> 
    
            <div class="form-group">
                <label>Nome</label>
                <input class="form-control">
            </div>

            <div class="form-group">
                <label>Descricao</label>
                <input class="form-control">
            </div>

            <div class="form-group">
                <label>Valor</label>
                <input type = "number" class = "form-control">
            </div>
            
            <div class="form-group">
                <label>Quantidade</label>
                <input type = "number" class = "form-control">
            </div>

            <button type = "Submit" class="btn
                btn-primary btn-block">Adicionar</button>

        </form>
    </div>
 @stop