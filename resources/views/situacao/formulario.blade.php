@extends('layout.app')
@section('conteudo')
    <h1>Situação</h1>
    <form action="/situacao" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$situacao->id}}">
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" name="tipo" value="{{$situacao->tipo}}" placeholder="informe aqui o tipo">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/situacao">Voltar</a>
    </form><br>
    <h1>Parcela</h1>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Id</th>
            <th>Quantidade de Parcelas</th>
            <th>Data de Vencimento</th>
            <th>Descrição</th>
            <th>Movimento Id</th>
            <th>Situação</th>
        </tr>
        @foreach($situacao->parcelas as $parcela)
            <tr>
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