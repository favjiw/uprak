<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}"> 
    <title>Add Hotel</title>
</head>
<body>
    @extends('layouts.master')

    @section('main-section')
    <form action="{{ url('/updated') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Hotel Name</label>
        <input type="text" name="name" id="">

        <label for="">Location</label>
        <input type="text" name="location" id="">

        <label for="">Price/night</label>
        <input type="number" name="price" id="">

        <label for="">Image</label>
        <input type="file" name="image" id="">

        <label for="">Facilities</label>
        <input type="text" name="facility" id="">

        <label for="">Description</label>
        <textarea name="desc" id="" cols="30" rows="10"></textarea>

        <button type="submit">Add Hotel</button>
    </form>
    @endsection
</body>
</html>