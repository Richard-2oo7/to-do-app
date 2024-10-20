@props(['docTitle' => 'To Do'])
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$docTitle}}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @Vite(['resources/js/app.js', 'resources/css/app.css'])
    @stack('assets')
</head>
<body class="bg-colorblack/40 p-5 h-full overflow-y-hidden">
    {{$slot}}
</body>
</html>