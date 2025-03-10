<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [
            0 =>[
                'nome' => 'Fornecedor 1', 
                'status' => 'S',
                'cnpj' => ''
                ]
            ,
            1 =>[
                'nome' => 'Fornecedor 2', 
                'status' => 'N'
                ]
            ];

            //ternario = condicao ? se verdadeiro : se falso;
            //$msg = isset($fornecedores[1]['cnpj'])? 'CNPJ informado' : 'CNPJ não informado';
            //echo $msg;

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
