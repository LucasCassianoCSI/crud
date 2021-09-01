<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Categorias</title>
</head>
<body>
    <div class="container col-6">
<h2 class="text-center">visualizar</h2>


<p> ID:                {{ $categoria->id}}</p>

<p> Nome:              {{ $categoria->nome}}</p>


<p> Criação:           {{ Carbon\Carbon::Parse($categoria->created)->format('d/m/Y h:i') }}</p>

<p> Ultima utilização: {{ Carbon\Carbon::Parse($categoria->updated_at)->format('d/m/Y h:i') }}</p>

</div>

</body>
</html>