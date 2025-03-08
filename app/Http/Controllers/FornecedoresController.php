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
            ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
