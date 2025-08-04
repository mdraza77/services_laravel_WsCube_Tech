@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
</head>

<body>
    @section('main-container')
        <section class="container mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Our Services</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <!-- Service Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 ease-in-out">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Guided Tours</h2>
                    <p class="text-gray-600">Explore breathtaking landscapes with our expert guides. Perfect for all skill
                        levels.</p>
                </div>
                <!-- Service Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 ease-in-out">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Custom Itineraries</h2>
                    <p class="text-gray-600">Tailored adventures designed just for you. Tell us your dream, we'll make it
                        happen.
                    </p>
                </div>
                <!-- Service Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 ease-in-out">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Equipment Rental</h2>
                    <p class="text-gray-600">High-quality gear for every adventure. Rent everything you need for your
                        journey.
                    </p>
                </div>
                {{-- Add more service cards here --}}
            </div>
        </section>
    @endsection
</body>

</html>
