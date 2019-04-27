@extends('layout.app')
@section('conteudo')
    <h1>Situação</h1>
    <a href="situacao/create" class="btn btn-warning">Novo</a>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Tipo</th>
        </tr>
        @foreach($situacoes as $situacao)
            <tr>
                <td>
                    <a class="btn btn-primary" href="situacao/{{$situacao->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="situacao/{{$situacao->id}}/destroy">Excluir</a>
                </td>
                <td>{{$situacao->id}}</td>
                <td>{{$situacao->tipo}}</td>
            </tr>
        @endforeach
    </table>
@endsection


