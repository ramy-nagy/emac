<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}">
</head>

<body>
    {{ $slot }}

    {{-- <div class="flex items-center min-h-screen p-6 bg-gray-50">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
        </div>
    </div> --}}
    <script src="{{ asset('js/sweetalert2@10.js') }}"></script>
    <script src="{{ asset('js/alpine.min.js') }}" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
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

    @if ($errors->any())
    {{-- <div class="font-medium text-red-600">
        {{ __('Whoops! Something went wrong.') }}
    </div> --}}
    @foreach ($errors->all() as $error)
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const message = "{{ $error}}";
            Toast.fire({
                icon: 'error',
                title: message
            })
        });
    </script>
    @endforeach
    @endif
</body>

</html>