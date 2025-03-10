<h3>Fornecedor</h3>

{{-- comentario aqui blade --}}

@php

// comentario do php nativo 
/* 
comentarios de bloco
*/

@endphp

{{-- usando o Isset no blade  para validar se a variavel fornecedores existe --}}
@isset($fornecedores)

    {{-- usando if e else no blade --}}
    @if(count($fornecedores) > 0 && count($fornecedores) < 10)
        <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif(count($fornecedores) > 10)
        <h3>Existem muitos fornecedores cadastrados</h3>
    @else
        <h3>Não existem fornecedores cadastrados</h3>
    @endif


    Fornecedor: {{ $fornecedores[0]['nome'] }} <br>
    Status: {{ $fornecedores[0]['status'] }} <br>

    {{-- usando o empty no blade --}}
    {{-- @empty é o contrário do @isset  valida se existe conteudo armazenado --}}
    @empty($fornecedores[0]['cnpj'])
        CNPJ - Vazio
    @endempty
    
    {{-- usando o unless no blade --}}
    {{-- @if é o contrário do @unless --}}
    @unless($fornecedores[0]['status'] == 'S')
        Fornecedor Inativo
    @endunless
    <br>

    Telefone: ({{ $fornecedores[0]['ddd'] ?? ''}}) {{ $fornecedores[0]['telefone'] ?? ''}} <br> 
    
    {{-- usando o Switch no blade --}}
    {{--
    @switch($fornecedores[1]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            Outros Estados
    @endswitch
    --}}

    {{-- usando o For no blade --}}
    <hr>
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }} <br>
        Status : {{ $fornecedores[$i]['status'] }} <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] }} <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] }}) {{ $fornecedores[$i]['telefone'] }} <br>
        <hr>
    @endfor

@endisset



