<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="/login">
    <link rel="shortcut icon" type="image/jpg" href="" />

    <title>{{ config('app.name')}}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!--google font-->
    <link rel="preconnect" href="https://www.initekno.com/cloudme.fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://www.initekno.com/cloudme.fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Readex Pro', sans-serif;
        }
    </style>

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>
    <div class="navbar bg-base-100 drop-shadow-lg px-10">
        <div class="flex-1">
            <a href="{{ route('students.index') }}" class="btn btn-ghost normal-case text-xl">Sekolah App</a>
        </div>
        {{-- <div class="flex-none">
            <ul class="menu menu-horizontal p-0">
                <li><a>Item 1</a></li>
                <li tabindex="0">
                    <a>
                        Parent
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                        </svg>
                    </a>
                    <ul class="p-2 bg-base-100">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div> --}}
    </div>
    <!-- content blade laravel -->
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

</html>
