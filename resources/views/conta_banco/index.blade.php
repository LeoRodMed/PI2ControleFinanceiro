@extends('layout.app')
@section('conteudo')
    <h1>Conta do Banco</h1>
    <a href="conta_banco/create" class="btn btn-warning">Novo</a>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Tipo</th>
            <th>Agência</th>
            <th>Número</th>
            <th>Banco</th>
            <th>Usuário</th>
        </tr>
        @foreach($conta_bancos as $conta_banco)
            <tr>
                <td>
                    <a class="btn btn-primary" href="conta_banco/{{$conta_banco->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="conta_banco/{{$conta_banco->id}}/destroy">Excluir</a>
                </td>
                <td>{{$conta_banco->id}}</td>
                <td>{{$conta_banco->tipo}}</td>
                <td>{{$conta_banco->agencia}}</td>
                <td>{{$conta_banco->numero}}</td>
                <td>{{$conta_banco->banco->nome}}</td>
                <td>{{$conta_banco->usuario->nome}}</td>
            </tr>
        @endforeach
    </table>
@endsection


