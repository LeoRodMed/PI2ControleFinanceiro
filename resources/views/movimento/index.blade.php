@extends('layout.app')
@section('conteudo')
    <h1>Movimento</h1>
    <a href="movimento/create" class="btn btn-warning">Novo</a>
        <table class="table table-hover table-bordered table-dark">
            <tr>
                <th>Ações</th>
                <th>Id</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Usuário</th>
            </tr>
            @foreach($movimentos as $movimento)
                <tr>
                    <td>
                        <a class="btn btn-primary" href="movimento/{{$movimento->id}}/edit">Alterar</a>
                        <a class="btn btn-danger" href="movimento/{{$movimento->id}}/destroy">Excluir</a>
                    </td>
                    <td>{{$movimento->id}}</td>
                    <td>{{$movimento->tipo}}</td>
                    <td>{{$movimento->valor}}</td>
                    <td>{{$movimento->descricao}}</td>
                    <td>{{$movimento->categoria->nome}}</td>
                    <td>{{$movimento->usuario->nome}}</td>
                </tr>
            @endforeach
        </table>
@endsection


