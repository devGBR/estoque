<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function lista(){ 

        $produtos = DB::select('SELECT * FROM produtos');

        return view('listagem')->withProdutos($produtos);
        
    }
}
