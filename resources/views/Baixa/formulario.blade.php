@extends('layout.app')
@section('conteudo')
    <h1>Baixa</h1>
    <form action="/baixa" method="post">
        @csrf
     <input type="hidden" name="id" value="{{$baixa->id}}">
        <div class="form-group">
            <label for="data_baixa">Data da Baixa</label>
            <input type="datetime-local" class="form-control" name="data_baixa" value="{{$baixa->data_baixa}}" placeholder="" required>
        </div>
    <div class="form-group">
        <label for="valor_pago">Valor Pago</label>
        <input type="float" class="form-control" name="valor_pago" value="{{$baixa->valor_pago}}" placeholder="R$00.00">
    </div>
        <div class="form-group">
            <label for="parcela_id">Parcela ID</label>
            <input type="number" class="form-control" name="parcela_id"  value="{{$baixa->parcela_id}}" placeholder="informe aqui o id da parcela">
        </div>
    <div class="form-group">
        <label for="conta_banco_id">Conta do Banco ID</label>
        <input type="number" class="form-control" name="conta_banco_id" value="{{$baixa->conta_banco_id}}" placeholder="informe aqui o id da conta do banco">
    </div>
    <div class="form-group">
        <label for="forma_pagamento_id">Forma de Pagamento ID</label>
        <input type="number" class="form-control" name="forma_pagamento_id" value="{{$baixa->forma_pagamento_id}}" placeholder="informe aqui o id da forma de pagamento">
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a class="btn btn-danger" href="/baixa">Voltar</a>
    </form>
@endsection