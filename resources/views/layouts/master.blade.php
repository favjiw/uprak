<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">
    <title></title>
</head>
<body>
    <header>
        <div class="logo">
            <h4>Hotelayo</h4>
        </div>
        <div class="nav">
            <h5><a href="/home">HOME</a></h5>
            <h5><a href="/hotels">Hotels</a></h5>
            <h5><a href="/add">Add Hotel</a></h5>
        </div>
    </header>
    @yield('main-section')
</body>
</html>