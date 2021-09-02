<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos docinhos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
   @endif
    <script>
     function ConfirmDelete() {
        return confirm('Tem certeza que deseja excluir este registro?');
    }
    </script>

    <div class="container col-8">
     <table class="table  no-margin">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Categoria</td>
                <td>Descrição</td>
                <td></td> <td></td> <td></td>
            </tr>
        </thead>      
        <tbody>
                <tr>

                    @foreach ($produtos as $key => $value )
                    <tr>
                        <td> {{$value->id}}</td>
                        <td> {{$value->nome}}</td>
                        <td> {{$value->categoria->nome}}</td>
                        <td> {{$value->descricao}}</td>
                        <td><a class="btn btn-primary" href="{{ URL::to('produto/' . $value->id) }}">Visualizar</a> </td>    
                        <td><a class="btn btn-warning" href="{{ URL::to('produto/' . $value->id . '/edit') }}"> editar</a></td> 
                        <td>
                        
                    {{ Form::open(array('url' => 'produto/' . $value->id, 'onsubmit' => 'return ConfirmDelete()')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                        </td>
                    <!--  -->    
                    </tr>

                    @endforeach

                </tr>
        </tbody>
     </table>

   
    <a class="btn btn-success" href="{{URL::to ('produto/create')}}"> criar</a>




</div>

  
</body>
</html>