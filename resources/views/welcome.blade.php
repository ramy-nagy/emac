<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robots" content="INDEX,FOLLOW">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="ramy-nagy">
    <meta name='description' content='a doorway for emac customers'>
    <meta name='keywords' content='emac, emac.com egypt, emac Misr'>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>

<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <h1>{{ config('app.name', 'Laravel') }}</h1>
        <p>A simple template for rectangle calculation formula<br />. Brought to you by <a href="{{url('/')}}">{{
                config('app.name', 'Laravel') }}</a>.</p>
    </header>
    <h2>Join us</h2>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <h2><a href="{{ url('/dashboard') }}">Dashboard</a></h2>
        @else
        <h2> <a href="{{ route('login') }}">Log in</a> |
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
        </h2>


        @endauth
    </div>
    @endif

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled.</li>
            <li>Credits: <a href="{{url('/')}}">{{ config('app.name', 'Laravel') }}</a></li>
        </ul>
    </footer>

    <!-- Scripts -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>