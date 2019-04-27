@extends('layout.app')
@section('conteudo')
    <h1>Categoria</h1>
    <form action="/categoria" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$categoria->id}}">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome"  value="{{$categoria->nome}}" placeholder="informe aqui o nome da categoria">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/categoria">Voltar</a>
    </form><br>
    <h1>Movimento</h1>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Usuário</th>
        </tr>
        @foreach($categoria->movimentos as $movimento)
            <tr>
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


