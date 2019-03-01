@extends('testes-api.layouts.template')

@section('content-api')

<h1>Todos Alunos</h1>

@if( session('success') )
    <div class="alert alert-success">
            {{ session('success') }}
    </div>
@endif

<a href="{{ route('alunos.create') }}" class="btn btn-success">Novo Cadastro<span class="glyphicon glyphicon-plus"></span></a>

<table class="table table-striped">
    <tr>
      <th>RA</th>
	    <th>Nome</th>
      <th>Endereço</th>
      <th>Bairro</th>
      <th>Cidade</th>
      <th>Celular</th>
      <th>Data Nascimento</th>
      <th>Sexo</th>
      <th>E-mail</th>
      <th>CPF</th>
      <th>RG</th>
      <th>RNE</th>
      <th>Certi. Nascimento</th>
      <th>Doc Militar</th>
      <th>Situação</th>
      <th>Ação</th>
    </tr>
    @forelse($alunos->data as $aluno)
    	<tr>
        <td>{{ $aluno->id }}</td>
        <td>{{ $aluno->nome }}</td>
        <td>{{ $aluno->endereco }}</td>
        <td>{{ $aluno->bairro }}</td>
        <td>{{ $aluno->cidade }}</td>
        <td>{{ $aluno->celular }}</td>
        <td>{{ $aluno->datanascimento }}</td>
        <td>{{ $aluno->sexo }}</td>
        <td>{{ $aluno->email }}</td>
        <td>{{ $aluno->cpf }}</td>
        <td>{{ $aluno->rg }}</td>
        <td>{{ $aluno->rne }}</td>
        <td>{{ $aluno->certnascimento }}</td>
        <td>{{ $aluno->docmilitar }}</td>
        <td>{{ $aluno->matriculado }}</td>
        <td>
          <a href="{{ route('alunos.edit', $aluno->id) }}">
            Editar 
          </a> | 
		      <a href="{{ route('alunos.show', $aluno->id) }}">
            Visualizar 
          </a>
        </td>
    	</tr>
    @empty
    <tr>
        <td colspan="20"> Nenhum Produto Encontrado</td>
    </tr>
    @endforelse
</table>
<nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            @if( $alunos->prev_page_url != '')
            <a class="page-link" href="{{ route('alunos.paginate',$alunos->current_page-1) }}" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
            @endif
          </li>
          <li class="page-item"><a class="page-link" href="#">{{ $alunos->current_page }}</a></li>
         @if( $alunos->next_page_url != '')
         <li>
            <a class="page-link" href="{{ route('alunos.paginate',$alunos->current_page+1) }}" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
        @endif
          </li>
        </ul>
      </nav>
@endsection