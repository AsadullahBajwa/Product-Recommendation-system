
@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
            <h2 class="text-3xl font-semibold mb-4">Recommended Products</h2>

            @foreach($recommendations as $recommendation)
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg overflow-hidden transition transform hover:scale-105 gap-4">
                    <div class="flex">
                        <img src="{{ asset('images/example.png') }}" alt="{{ $recommendation->name }}"
                             class="w-24 h-24 object-cover">
                        <div class="p-4 flex-grow">
                            <h3 class="text-xl font-semibold mb-2">{{ $recommendation->name }}</h3>
                            <p class="text-gray-700 mb-4">{{ $recommendation->description }}</p>
                            <p class="text-gray-700 mb-2">Category: {{ $recommendation->category }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
