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
    <h1 class="text-4xl underline font-extrabold">
        Hello world!
    </h1>

    <i class="fa-solid fa-user"></i>

    <button type="button"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>


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
