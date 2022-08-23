<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use estoque\Produto;
use Illuminate\Support\Facades\DB;


class formController extends ProdutoController
{
    public function adc(Request $request) {
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric'
        ]);

        Produto::create($request->all());

        return redirect()->action('ProdutoController@lista')->withInput($request->only('nome'));
    }

    public function alterar($id,Request $request) {
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric'
        ]);

        $params = $request->all(); 
        $produto = Produto::find($id);
        $produto->update($params);

        return redirect()->action('ProdutoController@lista')->withInput($request->only('quantidade'));
        
    }
}
