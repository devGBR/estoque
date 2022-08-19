<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

class formController extends ProdutoController
{
    public function adc(Request $request) {
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric'
        ]);

        $this->adiciona();

        return redirect('/produtos')->withInput();
    }

    
}
