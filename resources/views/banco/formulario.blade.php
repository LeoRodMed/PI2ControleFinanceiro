@extends('layout.app')
@section('conteudo')
    <h1>Banco</h1>
    <form action="/banco" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$banco->id}}">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{$banco->nome}}" placeholder="informe aqui o nome do banco">
        </div>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" name="codigo" value="{{$banco->codigo}}" placeholder="informe aqui o código do banco">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/banco">Voltar</a>
    </form><br>
    <h1>Conta do Banco</h1>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Agência</th>
            <th>Número</th>
            <th>Banco</th>
            <th>Usuário</th>
        </tr>
        @foreach($banco->conta_bancos as $conta_banco)
            <tr>
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