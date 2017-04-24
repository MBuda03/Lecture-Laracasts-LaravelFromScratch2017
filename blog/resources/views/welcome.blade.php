<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title></title>

    </head>
    <body>
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul>
    </body>
</html>
