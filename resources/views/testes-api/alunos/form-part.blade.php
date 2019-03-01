    <label>Nome:</label>
    <div class="form-group">
        {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome Completo', 'required']) !!}
    </div>

    <label>Endereço:</label>
    <div class="form-group">
        {!! Form::text('endereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço do Aluno']) !!}
    </div>

    <label>Bairro:</label>
    <div class="form-group">
        {!! Form::text('bairro', null, ['class' => 'form-control', 'placeholder' => 'Bairro em que mora']) !!}
    </div>

    <label>Cidade:</label>
    <div class="form-group">
        {!! Form::text('cidade', null, ['class' => 'form-control', 'placeholder' => 'Cidade do Aluno']) !!}
    </div>

    <label>Celular:</label>
    <div class="form-group">
        {!! Form::number('celular', null, ['class' => 'form-control', 'placeholder' => 'Contato telefônico']) !!}
    </div>

    <label>Data Nascimento:</label>
    <div class="form-group">
        {!! Form::date('datanascimento', null, ['class' => 'form-control', 'placeholder' => 'Data de Nascimento']) !!}
    </div>

    <label>Sexo:</label>
    <div class="form-group">
        {!! Form::text('sexo', null, ['class' => 'form-control', 'placeholder' => 'Sexo']) !!}
    </div>

    <label>E-mail:</label>
    <div class="form-group">
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
    </div>

    <label>CPF:</label>
    <div class="form-group">
        {!! Form::number('cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF']) !!}
    </div>

    <label>RG:</label>
    <div class="form-group">
        {!! Form::number('rg', null, ['class' => 'form-control', 'placeholder' => 'Endereço do Aluno']) !!}
    </div>

    <label>RNE:</label>
    <div class="form-group">
        {!! Form::number('rne', null, ['class' => 'form-control', 'placeholder' => 'Endereço do Aluno']) !!}
    </div>
    
    <label>Cert. Nascimento:</label>
    <div class="form-group">
        {!! Form::number('certnascimento', null, ['class' => 'form-control', 'placeholder' => 'Certidão de Nascimento']) !!}
    </div>

    <label>Doc. Militar:</label>
    <div class="form-group">
        {!! Form::text('docmilitar', null, ['class' => 'form-control', 'placeholder' => 'Documento Militar']) !!}
    </div>

    <label>Matriculado ?</label>
    <div class="form-group">
        {!! Form::text('matriculado', null, ['class' => 'form-control', 'placeholder' => 'Qual a situação do aluno?']) !!}
    </div>
    
    <div class="form-group">
        <input type="submit" value="Cadastrar" class="btn btn-default">
    </div>