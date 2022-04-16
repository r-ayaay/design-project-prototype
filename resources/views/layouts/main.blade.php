<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print()</title>
    <link href="{{URL::asset('sass/main.css')}}" rel="stylesheet">
</head>

<body>
    <nav>
        <ul>
            <li><a href="/" class="brand">PRINT ()</a></li>
            <li><a href="/">Home</a></li>
            <li><a href="/order">Order</a></li>
            <li style="float:right"><a href="/about">About Us</a></li>

        </ul>
    </nav>
    @yield('content')
</body>

</html>