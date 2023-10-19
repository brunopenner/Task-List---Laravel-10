<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Task List App</title>

    @yield('styles')
</head>
<body>
    <style>
        body {
            padding: 50px;
        }

        .hero {
            background: #347e34;
            text-align: center;
            padding: 50px;
            color: white;
        }

        a {
            color: white;
        }
    </style>

    <div class="hero">
        <h1>@yield('title')</h1>
        <div>
            @if(session()->has('success'))
                <div>{{session('success')}}</div>
            @endif
            @yield('content')
        </div>
    </div>
    
</body>
</html>