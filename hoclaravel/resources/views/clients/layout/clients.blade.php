<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">

</head>
<body>
    @include('clients.blocks.')
    <main>
        <h1>main</h1>
    </main>
    <footer>
        <h1>footer </h1>
    </footer>
    <script src="{{asset('assets/clients/js/bootstrap.min.css')}}" ></script>
    <script src="{{asset('assets/clients/js/custom.js')}}" ></script>
    @yield('js')
</body>
</html>