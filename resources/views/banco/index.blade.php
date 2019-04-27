@extends('layout.app')
@section('conteudo')
    <h1>Banco</h1>
    <a href="banco/create" class="btn btn-warning">Novo</a>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Código</th>
        </tr>
        @foreach($bancos as $banco)
            <tr>
                <td>
                    <a class="btn btn-primary" href="banco/{{$banco->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="banco/{{$banco->id}}/destroy">Excluir</a>
                </td>
                <td>{{$banco->id}}</td>
                <td>{{$banco->nome}}</td>
                <td>{{$banco->codigo}}</td>
            </tr>
        @endforeach
    </table>
@endsection


