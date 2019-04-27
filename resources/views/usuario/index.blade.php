@extends('layout.app')
@section('conteudo')
    <h1>Usuário</h1>
    <a href="usuario/create" class="btn btn-warning">Novo</a>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th>Senha</th>
        </tr>
        @foreach($usuarios as $usuario)
            <tr>
                <td>
                    <a class="btn btn-primary" href="usuario/{{$usuario->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="usuario/{{$usuario->id}}/destroy">Excluir</a>
                </td>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->cpf}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->telefone}}</td>
                <td>{{$usuario->data_nascimento}}</td>
                <td>{{$usuario->senha}}</td>
            </tr>
        @endforeach
    </table>
@endsection


