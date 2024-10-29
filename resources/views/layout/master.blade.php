<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template @yield('title','Website')</title>
    <link rel="stylesheet" href="{{ asset('css\stlye.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>
<body>
    @include('header') <!-- Include header -->

    <div class="container">
        {{-- Main Content Section  --}}
        <main>
            @hasSection('content')
                @yield('content')
            @else
                <h2>Content Not Found</h2>
            @endif
        </main>
    </div>

    @include('footer') <!-- Include footer -->
</body>
</html>

