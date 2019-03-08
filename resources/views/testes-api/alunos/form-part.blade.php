    <label>Nome:</label>
    <div class="form-group">
        {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome Aqui', 'required']) !!}
    </div>

    <label>Endereço:</label>
    <div class="form-group">
            {!! Form::text('enderecos', null, ['class' => 'form-control', 'placeholder' => 'Endereço do Aluno', 'required']) !!}
    </div>
    
    <label>Bairro:</label>
    <div class="form-group">
            {!! Form::text('bairro', null, ['class' => 'form-control', 'placeholder' => 'Bairro do Aluno', 'required']) !!}
    </div>

    <label>Cidade:</label>
    <div class="form-group">
            {!! Form::text('cidade', null, ['class' => 'form-control', 'placeholder' => 'Cidade do Aluno', 'required']) !!}
    </div>

    <label>Celular:</label>
    <div class="form-group">
            {!! Form::text('celular', null, ['class' => 'form-control', 'placeholder' => 'Celular do Aluno', 'required']) !!}
    </div>

    <label>E-mail:</label>
    <div class="form-group">
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail do Aluno', 'required']) !!}
    </div>
    
    <div class="form-group">
            <input type="submit" value="Enviar" class="btn btn-default">
    </div>