@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    @section('main-container')
        <!-- Hero Section -->
        <section class="hero-section hero-section-height flex items-center justify-center text-center p-4 rounded-lg m-4">
            <div class="max-w-3xl mx-auto">
                <p class="text-lg md:text-xl font-semibold mb-4 uppercase tracking-wider">DISCOVER THE COLORFUL WORLD</p>
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 uppercase">NEW ADVENTURE</h1>
                <p class="text-base md:text-lg mb-8 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim.
                </p>
                <button
                    class="bg-white text-blue-600 hover:bg-gray-200 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                    DISCOVER NOW
                </button>
            </div>
        </section>
    @endsection
</body>

</html>
