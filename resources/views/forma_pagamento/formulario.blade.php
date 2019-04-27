@extends('layout.app')
@section('conteudo')
    <h1>Forma de Pagamento</h1>
    <form action="/forma_pagamento" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$forma_pagamento->id}}">
        <div class="form-group">
            <label for="forma_pagamento">Forma de Pagamento</label>
            <input type="text" class="form-control" name="forma_pagamento" value="{{$forma_pagamento->forma_pagamento}}" placeholder="informe aqui a forma de pagamento">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/forma_pagamento">Voltar</a>
    </form><br>
    <h1>Baixa</h1>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Id</th>
            <th>Data da Baixa</th>
            <th>Valor Pago</th>
            <th>Parcela Id</th>
            <th>Conta do Banco Id</th>
            <th>Forma de Pagamento</th>
        </tr>
        @foreach($forma_pagamento->baixas as $baixa)
            <tr>
                <td>{{$baixa->id}}</td>
                <td>{{$baixa->data_baixa}}</td>
                <td>{{$baixa->valor_pago}}</td>
                <td>{{$baixa->parcela->id}}</td>
                <td>{{$baixa->conta_banco->id}}</td>
                <td>{{$baixa->forma_pagamento->forma_pagamento}}</td>
            </tr>
        @endforeach
    </table>
@endsection