<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-blue-600 shadow-md py-4 px-6 md:px-12 flex items-center justify-between rounded-b-lg">
        <!-- Logo/Brand Name -->
        <div class="text-white text-2xl font-bold rounded-md">
            <a href="{{ url('/')}}">
                Developer Raza
            </a>
        </div>

        <!-- Navigation Links -->
        <nav>
            <ul class="flex space-x-4 md:space-x-8">
                <li><a href="{{ url('/') }}"
                        class="text-white hover:text-blue-200 transition duration-300 ease-in-out font-medium">HOME</a>
                </li>
                <li><a href="{{ url('/about') }}"
                        class="text-white hover:text-blue-200 transition duration-300 ease-in-out font-medium">ABOUT</a>
                </li>
                <li><a href="{{ url('/services') }}"
                        class="text-white hover:text-blue-200 transition duration-300 ease-in-out font-medium">SERVICE</a>
                </li>
                <li><a href="{{ url('/contact') }}"
                        class="text-white hover:text-blue-200 transition duration-300 ease-in-out font-medium">CONTACT</a>
                </li>
                <li><a href="#"
                        class="bg-blue-700 hover:bg-blue-800 text-white py-2 px-4 rounded-full transition duration-300 ease-in-out font-medium shadow-lg">BOOK
                        NOW</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>
