<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2b7eddacef.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">   
    <title>Detail</title>
</head>
<body>
    @extends('layouts.master')

    @section('main-section')
    <div class="main">
        <div class="split left">
            <img src="{{ asset('hotel-image/'.$hotel->image) }}" alt="">
            <div class="left-info">
                <h1 id="title">{{ $hotel->name }}</h1>
                <h4>{{ $hotel->location }}</h4>
                <h4>Harga : {{ $hotel->price }}</h4>
                <h4>Fasilitas : {{ $hotel->facility }}</h4>
                <hr>
                <h5>Deskripsi Hotel</h5>
                <p>{{ $hotel->desc }}</p>
            </div>
        </div>
        <div class="split right">
            <a href="{{ url('/hotel/edit/'. $hotel->id) }}">edit</a>
            <form action="{{ url('/delete',$hotel->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger  btn-sm"><i class="fa-solid fa-ban"></i></button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>