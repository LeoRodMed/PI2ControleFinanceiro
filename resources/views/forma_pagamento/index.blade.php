@extends('layout.app')
@section('conteudo')
    <h1>Forma de Pagamento</h1>
    <a href="forma_pagamento/create" class="btn btn-warning">Novo</a>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Forma de Pagamento</th>
        </tr>
        @foreach($forma_pagamentos as $forma_pagamento)
            <tr>
                <td>
                    <a class="btn btn-primary" href="forma_pagamento/{{$forma_pagamento->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="forma_pagamento/{{$forma_pagamento->id}}/destroy">Excluir</a>
                </td>
                <td>{{$forma_pagamento->id}}</td>
                <td>{{$forma_pagamento->forma_pagamento}}</td>
            </tr>
        @endforeach
    </table>
@endsection


