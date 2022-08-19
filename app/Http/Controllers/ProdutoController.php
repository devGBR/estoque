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

    public function novo() {

        return view('produto.formulario');


    }

    protected function adiciona() {

        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade'); 
        if(!empty($nome) && !empty($descricao) && !empty($valor) && !empty($quantidade)){
        
            DB::insert('insert into produtos(nome, descricao, valor, quantidade) values(?,?,?,?)', array($nome, $descricao, $valor, $quantidade));
            
        }    
            
        
    }
        
}
