<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind Style --}}
    @vite('resources/css/app.css')

    <title>Felova | {{ $title }}</title>
</head>

<body class="bg-[#F7F7F7] font-sans">
    @include('partials.slidebar')

    <div class="container">
        @yield('container')
    </div>

    <script src="{{ asset('../node_modules/tw-elements/dist/js/tw-elements.umd.min.js') }}"></script>
</body>

</html>