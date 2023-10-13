<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            padding: 50px;
        }

        .hero {
            background: green;
            text-align: center;
            padding: 50px;
            color: white;
        }
    </style>
    <div class="hero">
        <h1>Hello, I'm a Blade template!</h1>
        @isset ($name)
            <p>The name is {{ $name }}</p>
        @endisset
    </div>
    
</body>
</html>