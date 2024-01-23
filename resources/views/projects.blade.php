<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projects</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <link rel="stylesheet" href="/dist/output.css">
</head>

<body class="antialiased">
    @include('./_navigation')

    <section class="flex gap-2">
        @foreach($projects as $project)
        <a href="/projects/{{$project->id}}">
            <article class="h-1/5 w-1/4">
                <h2 class="text-3xl font-bold underline">{{$project->naam}}</h2>
                <img src={{ asset($project->image)}} alt="">
            </article>
        </a>

        @endforeach
    </section>
</body>

</html>