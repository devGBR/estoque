 @extends('layout.principal')

 @section('conteudo')
    <h1> Cadastre novo produto</h1>
    
        <form> 
    
            <div class="form-group">
                <label>Nome</label>
                <input name = "nome" class="form-control">
            </div>

            <div class="form-group">
                <label>Descricao</label>
                <input name = "descricao " class="form-control">
            </div>

            <div class="form-group">
                <label>Valor</label>
                <input name = "valor" class = "form-control">
            </div>
            
            <div class="form-group">
                <label>Quantidade</label>
                <input name = "quantidade" type = "number" class = "form-control">
            </div>

            <button type = "Submit" class="btn
                btn-primary btn-block">Adicionar</button>

        </form>
    </div>
 @stop