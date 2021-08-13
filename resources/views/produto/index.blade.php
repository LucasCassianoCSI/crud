<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos docinhos</title>
</head>
<body>
    <table>

     <table class="table no-margin">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Descrição</td>
            </tr>
        </thead>
            
        <tbody>
                <tr>

                    @foreach ($produtos as $key => $value )
                    <tr>
                        <td> {{$value->id}}</td>
                        <td> {{$value->nome}}</td>
                        <td> {{$value->descricao}}</td>
                    </tr>
                    @endforeach

                </tr>
        </tbody>



     </table>


    
    </table>
</body>
</html>