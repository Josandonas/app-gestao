<!DOCTYPE html>
<html lang="pt">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        {{-- aqui testei funções internas --}}

       

        @if(count($fornecedor)> 0 && count($fornecedor) < 10)
        <h3>Existem alguns </h3>
        @elseif(count($fornecedor)> 10)
        <h3>Existem varios</h3>
        @else
        <h3>Não existem fornecedores</h3>
        @endif

    </body>
</html>