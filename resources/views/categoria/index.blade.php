@extends('layout.app')
@section('conteudo')
    <h1>Categoria</h1>
    <a href="categoria/create" class="btn btn-warning">Novo</a>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
        </tr>
        @foreach($categorias as $categoria)
            <tr>
                <td>
                    <a class="btn btn-primary" href="categoria/{{$categoria->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="categoria/{{$categoria->id}}/destroy">Excluir</a>
                </td>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nome}}</td>
            </tr>
        @endforeach
    </table>
@endsection


