<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Farid </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <x-navigation />
    <div class="p-10">
        {{ $slot }}
    </div>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
