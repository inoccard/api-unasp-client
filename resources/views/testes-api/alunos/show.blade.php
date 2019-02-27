@extends('testes-api.layouts.template'
)
@section('content-api')

    <a href="{{ route('alunos.index') }}" class="btn btn-success">Voltar</a>

    <h1>Nome: {{ $aluno->nome }}</h1>
    <h1>Descrição: {{ $aluno->descricao }}</h1>

    {!! Form::open(['route' => ['alunos.destroy',$aluno->id], 'class' => 'form', 'method' => 'DELETE']) !!}
    
        <input type="submit" value="Deletar" class="btn btn-danger">  

    {!! Form::close() !!}

@endsection