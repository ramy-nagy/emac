<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/portal.css') }}" id="theme-style">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}">

    @livewireStyles

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        {{-- @include('layouts.navigation') --}}
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        {{-- @include('layouts.navigation-mobile') --}}
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.top-menu')
            <main class="h-full overflow-y-auto">
                <div class=" px-6 mx-auto grid">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <script>
        const thickness = {30:0.399, 28:0.475, 26:0.551, 24:0.701, 22:0.853, 20:1.006, 18:1.311, 16:1.613, 14:1.994, 13:2.372, 12:2.753, 11:3.132, 10:3.510};
        const duct_weight = {30:3.20, 28:3.81, 26:4.42, 24:5.64, 22:6.86, 20:8.08, 18:10.52, 16:12.96, 14:16.01, 13:19.07, 12:22.12, 11:25.16, 10:28.21};

    </script>
    @stack('scripts')
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        window.addEventListener('alert', ({
            detail: {
                type,
                message
            }
        }) => {
            Toast.fire({
                icon: type,
                title: message
            })
        })
    </script>
    @livewireScripts
    @if(session('message'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const message = "{{ session('message')}}";
            const type = "{{ session('type')}}";
            Toast.fire({
                icon: type,
                title: message
            })
        });
    </script>
    @endif
</body>

</html>