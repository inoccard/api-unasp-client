@extends('testes-api.layouts.template')

@section('content-api')

<h1>Cadastrar Novo Aluno</h1>
<a href="{{route('alunos.index')}}">Voltar</a>

{!! Form::open(['route' => 'alunos.store', 'class' => 'form', 'method' => 'POST']) !!}
    
@include('testes-api.alunos.form-part');  

{!! Form::close() !!}
@endsection