<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>lista di invitati</h1>

    @foreach ($invitati as $item)
        @if (strlen($item['numero']) > 5)
            <p>{{ $item['nome'] }}</p>
            <p>{{ $item['cognome'] }}</p>
            <p>{{ $item['numero'] }}</p>
            
        @else
        <p>il numero è minore di 5 numeri</p>
        @endif
        
    @endforeach


</body>
</html>