@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
</head>

<body>
    @section('main-container')
        <section class="container mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">About Us</h1>
            <p class="text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto">
                Welcome to our adventure! We are passionate about exploring the world and creating unforgettable
                experiences.
                Our team is dedicated to providing the best services and ensuring every journey is a new adventure.
            </p>
            {{-- Add more about us content here --}}
        </section>
    @endsection
</body>

</html>
