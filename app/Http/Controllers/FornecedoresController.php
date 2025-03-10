<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = 
            [
                0 =>[
                    'nome' => 'Fornecedor 1', 
                    'status' => 'S',
                    'cnpj' => '',
                    'ddd' => '11',
                    'telefone' => '0000-0000'
                    ]
                ,
                1 =>[
                    'nome' => 'Fornecedor 2', 
                    'status' => 'N',
                    'cnpj' => '00.000.000/0000-00',
                    'ddd' => '85',
                    'telefone' => '0000-0000'
                ],
                2 =>[
                    'nome' => 'Fornecedor 2', 
                    'status' => 'N',
                    'cnpj' => '00.000.000/0000-00',
                    'ddd' => '32',
                    'telefone' => '0000-0000'
                    ]
            ];

            //ternario = condicao ? se verdadeiro : se falso;
            //$msg = isset($fornecedores[1]['cnpj'])? 'CNPJ informado' : 'CNPJ não informado';
            //echo $msg;

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
