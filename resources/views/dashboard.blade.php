<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/77a36e339f.js" crossorigin="anonymous"></script>
    <title>Your Page Title</title>
</head>

<body>

    @extends('layouts.app')

    @section('content')
    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-3xl font-semibold">Product List</h2>
            </div>

            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 mb-4 rounded">
                {{ session('success') }}
            </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($products as $product)
                <div
                    class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg overflow-hidden transition transform hover:scale-105">
                    <div class="flex">
                        <img src="{{ asset('images/example.png') }}" alt="{{ $product->name }}"
                            class="w-24 h-24 object-cover">
                        <div class="p-4 flex-grow">
                            <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                            <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                            <p class="text-gray-700 mb-2">Category: {{ $product->category }}</p>

                            <!-- Add space between the Rating dropdown and the Submit Rating button -->
                            <div class="mx-5">
                                <form action="{{ route('product.like', $product->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit"
                                        class="border border-gray-300 bg-black text-blue px-4 py-2 rounded hover:bg-gray-800 transition duration-300">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection

</body>

</html>