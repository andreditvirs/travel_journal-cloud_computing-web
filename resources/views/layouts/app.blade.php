<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

</head>


<body class="">
    <div class="container">

        @includeIf('navbar')
        @yield('content')

    </div>
</body>

{{-- Tailwind --}}
@vite('resources/js/app.js')

{{-- Font Awesome --}}
<script src="https://kit.fontawesome.com/cedc7b6ee2.js" crossorigin="anonymous"></script>

{{-- JQuery --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

{{-- SweetAlert2 --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
