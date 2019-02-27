@extends('testes-api.layouts.template')

@section('content-api')

<h1>Listagem de produtos</h1>

@if( session('success') )
    <div class="alert alert-success">
            {{ session('success') }}
    </div>
@endif

<a href="{{ route('alunos.create') }}" class="btn btn-success">Cadastrar <span class="glyphicon glyphicon-plus"></span></a>

<table class="table table-striped">
    <tr>
	    <th>Nome</th>
        <th>Descrição</th>
        <th>Ação</th>
    </tr>
    @forelse($alunos->data as $aluno)
    	<tr>
            <td>{{ $aluno->nome }}</td>
            <td>{{ $aluno->descricao }}</td>
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