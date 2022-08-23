<?php

namespace estoque\Http\Controllers;

use estoque\Http\Requests\ProdutoRequest;
use estoque\Produto;
use Illuminate\Support\Facades\DB;



class formController extends ProdutoController
{
    public function adc(ProdutoRequest $request) {

        Produto::create($request->all());

        return redirect()->action('ProdutoController@lista')->withInput($request->only('nome'));
    }

    public function alterar($id, ProdutoRequest $request) {

        $params = $request->all(); 
        $produto = Produto::find($id);
        $produto->update($params);

        return redirect()->action('ProdutoController@lista')->withInput($request->only('quantidade'));
        
    }
}
