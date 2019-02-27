@extends('testes-api.layouts.template')

@section('content-api')

<h1>Cadastrar Novo Produto</h1>
<a href="{{route('alunos.index')}}">Voltar</a>

{!! Form::open(['route' => 'alunos.store', 'class' => 'form']) !!}
    
@include('testes-api.alunos.form-part')    

{!! Form::close() !!}
@endsection