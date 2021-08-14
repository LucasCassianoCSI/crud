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
    <div class="container col6">

    {{Form::open(array('url' => '/produto/create')) }}

    {{ Form::label('nome', 'Nome') }}
    {{Form::text('nome', null)}}
    
    {{ Form::label('descricao', 'Descrição') }}
    {{ Form::text('descricao', null) }}
    
    {{ Form::submit('Enviar') }}

    {{ Form::close()  }}

</div>

</body>
</html>