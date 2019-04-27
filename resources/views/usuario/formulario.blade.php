@extends('layout.app')
@section('conteudo')
    <h1>Usuário</h1>
    <form action="/usuario" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$usuario->id}}">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{$usuario->nome}}" placeholder="informe aqui o nome">
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf"  value="{{$usuario->cpf}}" placeholder="informe aqui o cpf">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" value="{{$usuario->email}}"  placeholder="informe aqui o e-mail">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" value="{{$usuario->telefone}}"  placeholder="informe aqui o telefone">
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="datetime-local" class="form-control" name="data_nascimento" value="{{$usuario->data_nascimento}}" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" value="{{$usuario->senha}}" placeholder="informe aqui a senha">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/usuario">Voltar</a>
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
        @foreach($usuario->movimentos as $movimento)
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
        @foreach($usuario->conta_bancos as $conta_banco)
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