<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Laravel</title>
</head>

<body>
<h1>Hello World</h1>

<ul>
    @foreach($tasks as $task)

        <li><a href="tasks/{{ $task->id }}">{{ $task->body }}</a></li>

    @endforeach
</ul>
</body>
</html>
