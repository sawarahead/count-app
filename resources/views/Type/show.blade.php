<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Count-App</title>
    </head>
    
    <body>
        <header>
            <a href="/"><h1>Count-App</h1></a>
        </header>
        <div>{{$type->typeName}}</div>
        <form action="/types/{{$type->id}}/delete" method="post">
            @csrf
            <input type="submit" value="項目を削除する">
        </form>
    </body>
</html>
