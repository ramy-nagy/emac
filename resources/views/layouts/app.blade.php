<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta name="robots" content="INDEX,FOLLOW">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="ramy-nagy">
    <meta name='description' content='a doorway for emac customers'>
    <meta name='keywords' content='emac, emac.com egypt, emac Misr'>
    
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
            <footer class="app-footer">
                <div class="container text-center py-3">
                    <p class="copyright">Designed with
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #fb866a; display:inline" width="16" height="16"
                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </p>
                </div>
            </footer>
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