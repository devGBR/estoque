<?php

namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;


class ProdutoController extends Controller
{
    public function lista(){ 

        $produtos = DB::select('SELECT * FROM produtos');

        return view('produto.listagem')->withProdutos($produtos);
        
    }

    public function mostra(){

        $id = Request::route('id');

        $produto = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);
        if(empty($produto)){
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto[0]);
    }

    public function novo(){

        return view('produto.formulario');

    }

    public function adiciona(){

        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade'); ?>

        <?php if(!empty($nome)){
            DB::insert('insert into produtos(nome, descricao, valor, quantidade) values(?,?,?,?)', array($nome, $descricao, $valor, $quantidade))?>
            <div class="alert alert-success">
                <strong>Sucesso!</strong> Produto adicionado.
            </div>
        <?php } 
            else{?>
            <div class="alert al-danger">
                <strong>Erro!</strong> Preencha todos os campos.
            </div>
        <?php }

        return view('produto.formulario'); 
    }
}
