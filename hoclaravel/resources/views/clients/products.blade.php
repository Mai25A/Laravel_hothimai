<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - unicode</title>
    <style type="text/css" >
        h1{
            background-color: blueviolet;
            color: aliceblue;
        }
    </style>
</head>
<body>
    @extends('clients.layout.clients')

    @section('main_content')
    @if (session('msg'))
    <div class="alert alert-secondary">{{session('msg')}}</div>    
    @endif
        <h1>san pham </h1>
        @push('script')
        <script>
            console.log('push lan 2')
        </script>
        @endpush

            <h3>home sidebar</h3>

        <h1>TRang chu</h1>
        @push('script')
        <script>
            console.log('push lan 1')
        </script>
        @endpush
    @endsection
</body>
</html>