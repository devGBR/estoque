<?php

namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;




class ProdutoController extends Controller
{
    public function lista(){ 

        $produtos = Produto::all();

        return view('produto.listagem')->withProdutos($produtos);
        
    }

    public function listaJson(){
        $produtos = Produto::all();
        return reponse()->json($produtos);
    }
 
    public function mostra($id){

        $produto = Produto::find($id);

        if(empty($produto)){
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo() {

        return view('produto.formulario');
    }
    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista'); 
    }

    public function editar($id){

        $produto = Produto::find($id); 

        return view('produto.editar')->with('p', $produto);
    }
        
}
