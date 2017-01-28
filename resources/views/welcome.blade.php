<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Laravel</title>
</head>

<body>
    <h1>Hello World</h1>

    <ul>
        @foreach($tasks as $task)

            <li>{{ $task->body }}</li>

        @endforeach
    </ul>
</body>
</html>
