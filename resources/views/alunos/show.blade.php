@extends('layouts.template'
)
@section('content-api')

    <a href="{{ route('alunos.index') }}" class="btn btn-success">Voltar</a>

    <h1>Nome: {{ $aluno->nome }}</h1>
    <h1>Endereço: {{ $aluno->endereco }}</h1>
    <h1>Bairro: {{ $aluno->bairro }}</h1>
    <h1>Cidade: {{ $aluno->cidade }}</h1>
    <h1>Celular: {{ $aluno->celular }}</h1>
    <h1>E-mail: {{ $aluno->email }}</h1>

    {!! Form::open(['route' => ['alunos.destroy',$aluno->id], 'class' => 'form', 'method' => 'DELETE']) !!}
    
        <input type="submit" value="Deletar" class="btn btn-danger">  

    {!! Form::close() !!}

@endsection