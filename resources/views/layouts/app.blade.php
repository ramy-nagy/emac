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

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>{{config('app.name', 'Laravel')}} - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.dataTables.min.css') }}">


    <link rel="stylesheet" href="{{ asset('css/portal.css') }}" id="theme-style">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}">

    @livewireStyles

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        {{--@include('layouts.navigation')--}}
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        {{-- @include('layouts.navigation-mobile') --}}
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.top-menu')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <style>
                        .dt-button {
                            color: #000;
                            background-color: #5cb377 !important;
                            border-color: #5cb377;
                        }

                        table.dataTable tbody tr {
                            background-color: transparent !important;
                        }

                        table.dataTable tbody th,
                        table.dataTable tbody td {
                            padding: 5px 10px;
                        }

                        table.dataTable thead th,
                        table.dataTable thead td {
                            padding: 5px 0px;
                        }
                        table.dataTable th.dt-center, table.dataTable td.dt-center, table.dataTable td.dataTables_empty {
                            color: #fb866a;
                        }
                        .large-div-text {
                            padding: 20px;
                            border: 1px solid rgba(64, 189, 233, 0.42);
                            position: relative;
                            margin-top: -10px;
                        }

                        .why {
                            text-align: center;
                            position: relative;
                            top: -20px;
                            z-index: 1000;
                            width: 150px;
                            margin: 0 auto;
                        }
                    </style>
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Dashboard - <a href="{{route('projects.index')}}">Projects</a>
                    </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Summary</a></li>
                            <li class="breadcrumb-item "{{\Request::route()->getName() == 'Rec.Duct' ? 'aria-current="page"': '' }} ><a href="{{route('Rec.Duct')}}">Rec.Duct</a></li>
                            <li class="breadcrumb-item"><a href="#">Round.Duct</a></li>
                            <li class="breadcrumb-item"><a href="#">Fitting</a></li>
                            <li class="breadcrumb-item"><a href="#">Rec.Frame</a></li>
                            <li class="breadcrumb-item"><a href="#">Round.Frame</a></li>
                            <li class="breadcrumb-item"><a href="#">End.Cap.Rec</a></li>
                            <li class="breadcrumb-item"><a href="#">End.Cap.Round</a></li>
                            <li class="breadcrumb-item"><a href="#">Air.outlet.Plenum</a></li>
                            <li class="breadcrumb-item"><a href="#">Bell.Mouse</a></li>
                        </ol>
                    </nav>
                    <hr class="my-3">
                    {{ $slot }}
                </div>
            </main>
            {{-- <footer class="app-footer">
                <div class="container text-center py-3">
                    <p class="copyright">Designed with
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #fb866a; display:inline" width="16"
                            height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </p>
                </div>
            </footer> --}}
        </div>

    </div>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Javascript -->
    <script src="{{ asset('js/jquery.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/buttons.print.min.js') }}"></script>
    <script>
        $(document).ready(function() {
    $('.datatable').DataTable( {
        searching: false, paging: false, info: false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>
    <script>
        $(document).ready(function() { 
        calc_total();
    });
    function calc_total(){
        var sum = 0;
        $(".total").each(function(){
            var value = parseFloat($(this).text());
            if (!isNaN(value)) {
                sum += value;
            }
        });
        $('#sum').text(sum);
    }
    </script>
    <script src="{{ asset('js/sweetalert2@10.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/alpine.min.js') }}" defer></script>
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