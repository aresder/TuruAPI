<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>{{ 'Turu API - ' . $title ?? env('APP_NAME') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    {{-- Preline --}}
    @vite('resources/js/app.js')
</head>

<body>
    <section class="h-screen bg-gradient-to-bl from-gradiant via-white to-white -z-50">
        {{ $slot }}
    </section>
</body>

</html>
