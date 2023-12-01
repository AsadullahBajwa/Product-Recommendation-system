@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
            <h2 class="text-3xl font-semibold text-center mb-4">Add Product</h2>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form method="post" action="{{ route('products.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" class="form-input mt-1 block w-full" id="name" name="name" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                    <textarea class="form-input mt-1 block w-full" id="description" name="description" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-700">Category:</label>
                    <select class="form-select mt-1 block w-full" id="category" name="category" required>
                        <option value="" disabled>Select a category</option>
                        <option value="Electronic">Electronic</option>
                        <option value="Grocery">Grocery</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Clothes">Clothes</option>
                    </select>
                </div>

                <button type="submit" class="border border-black text-black px-3 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-700 transition duration-300 w-full">Create Product</button>
            </form>
        </div>
    </div>
@endsection
