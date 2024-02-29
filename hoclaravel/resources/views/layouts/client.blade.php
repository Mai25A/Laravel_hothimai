<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>header</h1>
    </header>
    <main>
        <p>main</p>
        @section('sidebar')
        <p>main sidebar</p>
            @include('clients.blocks.sidebar')
        @show
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer>
        <h1>FOOTER</h1>
    </footer>
</body>
</html>