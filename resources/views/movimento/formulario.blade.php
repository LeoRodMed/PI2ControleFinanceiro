@extends('layout.app')
@section('conteudo')
    <h1>Movimento</h1>
    <form action="/movimento" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$movimento->id}}">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Tipo</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="C" value="C" {{ $movimento->tipo == 'C' ? 'checked' : '' }}>
                    <label class="form-check-label" for="C">
                        Crédito
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="D" value="D" {{ $movimento->tipo == 'D' ? 'checked' : '' }}>
                    <label class="form-check-label" for="D">
                        Débito
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="float" class="form-control" name="valor" value="{{$movimento->valor}}"  placeholder="R$00.00">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3">{{$movimento->descricao}}</textarea>
        </div>
        <div class="form-group">
            <label for="categoria_id">Categoria ID</label>
            <input type="number" class="form-control" name="categoria_id" value="{{$movimento->categoria_id}}"  placeholder="informe aqui o id da categoria">
        </div>
        <div class="form-group">
            <label for="usuario_id">Usuário ID</label>
            <input type="number" class="form-control" name="usuario_id" value="{{$movimento->usuario_id}}" placeholder="informe aqui o id do usuário">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/movimento">Voltar</a>
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
        @foreach($movimento->parcelas as $parcela)
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