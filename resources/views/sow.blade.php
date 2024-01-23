<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project | {{$project->naam}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <link rel="stylesheet" href="/dist/output.css">
</head>

<body class="antialiased">
    <header class="w-full p-5 gap-2 flex justify-center flex-wrap">
        @include('./_navigation')
    </header>
    <section class="flex">
        <h2>{{$project->naam}}</h2>
    </section>
</body>

</html>