<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900":class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('layouts.navigation')
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        @include('layouts.navigation-mobile')
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.top-menu')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">

                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>