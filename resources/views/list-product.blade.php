<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Danh sách sản phẩm</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->

    <!-- Styles -->

</head>

<body class="container">
    <h1 class="mb-5 mt-3">Danh sách sản phẩm</h1>
    <table class="table border">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $value)
            <tr>
                <td>{{$value['id'] }}</td>
                <td>{{$value['name'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table border">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $value)
            <tr>
                <td>{{$value['id'] }}</td>
                <td>{{$value['name'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>