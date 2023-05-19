<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <h1>{{ $page_title }}</h1>
    <p>{{ $description }}</p>
    <a href="{{ route('contatti') }}">Vai a contatti</a>
    @if (count($students) > 0)

        <h4>Students</h4>
        <ul>
            @foreach ($students as $student)
                <li>{{ $student }}</li>
            @endforeach
        </ul>
    @endif
    @if (count($teachers) > 0)
        <h4>Teachers</h4>
        <ul>
            @foreach ($teachers as $teacher)
                <li>{{ $teachert }}</li>
            @endforeach
        </ul>
    @endif
</body>

</html>
