<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - CRUD</title>
</head>
<body>
   @section('content')
    <h1>Saints</h1>
    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="">
                    {{ $saint -> name }}
                </a>
            </li>
        @endforeach
    </ul>

    @endsection
</body>
</html>


