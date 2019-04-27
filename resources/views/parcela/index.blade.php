@extends('layout.app')
@section('conteudo')
    <h1>Parcela</h1>
    <a href="parcela/create" class="btn btn-warning">Novo</a>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Quantidade de Parcelas</th>
            <th>Data de Vencimento</th>
            <th>Descrição</th>
            <th>Movimento Id</th>
            <th>Situação</th>
        </tr>
        @foreach($parcelas as $parcela)
            <tr>
                <td>
                    <a class="btn btn-primary" href="parcela/{{$parcela->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="parcela/{{$parcela->id}}/destroy">Excluir</a>
                </td>
                <td>{{$parcela->id}}</td>
                <td>{{$parcela->qtd_parcelas}}</td>
                <td>{{$parcela->data_vencimento}}</td>
                <td>{{$parcela->descricao}}</td>
                <td>{{$parcela->movimento->id}}</td>
                <td>{{$parcela->situacao->tipo}}</td>
            </tr>
        @endforeach
    </table>
@endsection


