@extends('layout.app')
@section('conteudo')
    <h1>Conta do Banco</h1>
    <form action="/conta_banco" method="post">
        @csrf
    <input type="hidden" name="id" value="{{$conta_banco->id}}">
    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="text" class="form-control" name="tipo" value="{{$conta_banco->tipo}}" placeholder="informe aqui o tipo da conta">
    </div>
        <div class="form-group">
            <label for="agencia">Agência</label>
            <input type="text" class="form-control" name="agencia" value="{{$conta_banco->agencia}}" placeholder="informe aqui a agência">
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" class="form-control" name="numero"  value="{{$conta_banco->numero}}" placeholder="informe aqui o número">
        </div>
    <div class="form-group">
        <label for="banco_id">Banco ID</label>
        <input type="number" class="form-control" name="banco_id"  value="{{$conta_banco->banco_id}}" placeholder="informe aqui o id do banco">
    </div>
    <div class="form-group">
        <label for="usuario_id">Usuário ID</label>
        <input type="number" class="form-control" name="usuario_id" value="{{$conta_banco->usuario_id}}" placeholder="informe aqui o id do usuário">
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a class="btn btn-danger" href="/conta_banco">Voltar</a>
    </form><br>
    <h1>Baixa</h1>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Id</th>
            <th>Data da Baixa</th>
            <th>Valor Pago</th>
            <th>Parcela Id</th>
            <th>Conta do Banco Id</th>
            <th>Forma de Pagamento</th>
        </tr>
        @foreach($conta_banco->baixas as $baixa)
            <tr>
                <td>{{$baixa->id}}</td>
                <td>{{$baixa->data_baixa}}</td>
                <td>{{$baixa->valor_pago}}</td>
                <td>{{$baixa->parcela->id}}</td>
                <td>{{$baixa->conta_banco->id}}</td>
                <td>{{$baixa->forma_pagamento->forma_pagamento}}</td>
            </tr>
        @endforeach
    </table>
@endsection