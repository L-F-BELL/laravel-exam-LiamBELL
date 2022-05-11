<?php 
    use Carbon\Carbon;
    Carbon::setLocale('fr');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$showTask->title}}</title>
</head>
<body>
    <h1>Task # {{$showTask->id}}</h1>
    <div>
        <p>
            {{$showTask->title}}
        </p>
        <p>
            {{$showTask->description}}
        </p>
        <p>
            Créé le {{$showTask->created_at->translatedFormat('d F Y')}}
        </p>

        <a href="/deletedTask{{ $showTask->id }}">Delete</a>
    </div>
</body>
</html>