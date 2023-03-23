<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Carro #{{ $carro->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $carro->nome }} - {{ $carro->marca }}</h1>

            <h3>Data de Fabricação: {{ $carro->data_fabricacao }} </h3>

            <h3>Pelos {{ $carro->cor }}</h3>

            <p>
                {{ $carro->carrografia }}
            </p>

            <a href="{{ route('carros.index') }}">Voltar a lista</a>
        </div>
    </body>
</html>
