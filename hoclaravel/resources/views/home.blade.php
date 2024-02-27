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
        <div class="container">
            {!!$content!!}
        </div><hr>
        @if($index >=10)
        <p>day la gia tri hop le</p>
        @endif
        @switch($index)
        @case(1)
        @case(3)
        <p>1</p>
        @break
        @case(2)
        <p>2</p>
        @break
        @default
            <p>
                2222
            </p>
            @break
        @endswitch
    </main>
    <footer>
        <h1>footer</h1>
    </footer>
</body>
</html>