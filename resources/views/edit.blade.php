<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Hotel</title>
</head>
<body>
    @extends('layouts.master')

    @section('main-section')
    <form action="{{ url('/hotel/updated/'.$hotel->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Hotel Name</label>
        <input type="text" name="name" id="" value="{{ $hotel->name }}">

        <label for="">Location</label>
        <input type="text" name="location" id=""  value="{{ $hotel->location }}">

        <label for="">Price/night</label>
        <input type="number" name="price" id=""  value="{{ $hotel->price }}" >

        <label for="">Image</label>
        <input type="file" name="image" id="">

        <label for="">Facilities</label>
        <input type="text" name="facility" id=""  value="{{ $hotel->facility }}">

        <label for="">Description</label>
        <textarea name="desc" id="" cols="30" rows="10">{{ $hotel->desc }}</textarea>

        <button type="submit">Add Hotel</button>
    </form>
    @endsection
</body>
</html>