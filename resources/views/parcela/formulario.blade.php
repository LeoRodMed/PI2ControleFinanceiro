@extends('layout.app')
@section('conteudo')
    <h1>Parcela</h1>
    <form action="/parcela" method="post">
        @csrf
     <input type="hidden" name="id" value="{{$parcela->id}}">
    <div class="form-group">
            <label for="qtd_parcelas">Quantidade de Parcelas</label>
            <input type="number" class="form-control" name="qtd_parcelas" value="{{$parcela->qtd_parcelas}}"  placeholder="informe aqui a quantidade de parcelas">
        </div>
        <div class="form-group">
            <label for="data_vencimento">Data de Vencimento</label>
            <input type="date" class="form-control" name="data_vencimento" value="{{$parcela->data_vencimento}}" placeholder="" required>
        </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3">{{$parcela->descricao}}</textarea>
    </div>
    <div class="form-group">
        <label for="movimento_id">Movimento ID</label>
        <input type="number" class="form-control" name="movimento_id"  value="{{$parcela->movimento_id}}" placeholder="informe aqui o id do movimento">
    </div>
    <div class="form-group">
        <label for="situacao_id">Situação ID</label>
        <input type="number" class="form-control" name="situacao_id" value="{{$parcela->situacao_id}}" placeholder="informe aqui o id da situação">
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a class="btn btn-danger" href="/parcela">Voltar</a>
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
        @foreach($parcela->baixas as $baixa)
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


