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

        $nome = Requets::input('nome');
        $descricao = Requets::input('descricao');
        $valor = Requets::input('valor');
        $quantidade = Requets::input('quantidade');
    }
}
