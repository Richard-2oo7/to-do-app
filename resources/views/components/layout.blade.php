@props(['docTitle' => 'To Do'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$docTitle}}</title>
    @Vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black/60 p-5">
    {{$slot}}
</body>
</html>