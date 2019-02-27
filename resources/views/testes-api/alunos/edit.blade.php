@extends('testes-api.layouts.template'
)
@section('content-api')

    <h1>Editar Aluno: {{ $aluno->nome }}</h1>

    <a href="{{ route('alunos.index') }}" class="btn btn-success">Voltar</a>

    {!! Form::model($aluno, ['route' => ['alunos.update', $aluno->id], 'class' => 'form', 'method' => 'PUT']) !!}
    
        @include('testes-api.produtos.form-part')    

    {!! Form::close() !!}
 
@endsection