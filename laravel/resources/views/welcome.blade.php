<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>gioco dei numeri</h1>

    @foreach ($numeri as $numero)

        @if ($numero%2 == 0)
            <p>il numero {{ $numero }} è pari</p>
        @else
            <p>il numero {{ $numero }} è dispari</p>
            
        @endif

    @endforeach    



</body>
</html>