<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Adicionando novos produtos</title>
</head>
<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container col-6">

    {{ Form::model($produto,array('route' => array('produto.update', $produto->id), 'method' => 'PUT')) }}

    {{ Form::label('nome', 'Nome do produtos') }}
    {{ Form::text('nome', $produto->nome , ['class' => 'form-control'] )}}
    
    {{ Form::label('descricao', 'Descrição') }}
    {{ Form::text('descricao', $produto->descricao , ['class' => 'form-control'] ) }}
    
    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success ']) }}

    {{ Form::close()  }}

</div>

</body>
</html>