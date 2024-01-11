<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <header class="w-full p-5 gap-2 flex justify-center flex-wrap">
        @include('./_navigation')
    </header>
    <section class="flex gap-2">
        @foreach($projects as $project)
        <article class="h-1/5 w-1/4">
            <h2 class="text-3xl font-bold underline">{{$project->naam}}</h2>
            <img src={{ asset($project->image)}} alt="">
        </article>
        @endforeach
    </section>
</body>

</html>