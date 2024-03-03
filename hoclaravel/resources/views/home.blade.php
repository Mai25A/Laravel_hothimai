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
    @extends('layouts.client')

    @section('title')
        <h1>TRang chu</h1>
        @env('local')
            <p>Moi truowng dev</p>
            @else
            <p>khong phai moi truowng dev</p>
        @endenv
        <!-- <x-alert type="danger"/> -->
        <x-alert type="danger" content="dat hang thanh cong"/>    
        <!-- <x-package-alert/>
        <x-inputs.button/>
        <x-forms-button/> -->
    @push('script')
        <script>
            console.log('push lan 2')
        </script>
    @endpush

    @endsection
    @section('sidebar')
        @parent 
        <h3>home sidebar</h3>
    @endsection

    @section('content')
    <h1>TRang chu</h1>
    @endsection

    @section('js')
    @endsection

    @push('script')
    <script>
        console.log('push lan 1')
    </script>
    @endpush
</body>
</html>