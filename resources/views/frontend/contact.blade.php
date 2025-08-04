@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>
    @section('main-container')
        <section class="container mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Contact Us</h1>
            <p class="text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto mb-8">
                Have questions or want to book your next adventure? Reach out to us!
            </p>
            <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 text-left">Name</label>
                        <input type="text" id="name" name="name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Your Name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 text-left">Email</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Your Email">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 text-sm font-bold mb-2 text-left">Message</label>
                        <textarea id="message" name="message" rows="5"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline transition duration-300 ease-in-out">
                        Send Message
                    </button>
                </form>
            </div>
        </section>
    @endsection
</body>

</html>
