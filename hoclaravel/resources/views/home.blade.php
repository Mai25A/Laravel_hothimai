<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hoc lap trinh</title>
</head>
<body>
    <header>
        <h1>header</h1>
        <h2>
           {{$welcome}}
        </h2>
        <h3>
            {{!empty(request()->keyword)?request()->keyword:'KHong co gi'}}
        </h3>
    </header>
    <main>
        <h1>main</h1>
       <script>
         Hello, @{{$name}};
       </script>
    </main>
    <footer>
        <h1>footer</h1>
    </footer>
</body>
</html>