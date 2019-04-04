@extends('layouts.template')

@section('content-api')

<h1>Cadastrar Novo Aluno</h1>
<a href="{{route('alunos.index')}}">Voltar</a>

{!! Form::open(['route' => 'alunos.store', 'class' => 'form']) !!}
    
@include('alunos.form-part')    

{!! Form::close() !!}
@endsection