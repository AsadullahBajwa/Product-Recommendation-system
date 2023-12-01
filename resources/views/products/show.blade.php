@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
            <h2 class="text-3xl font-semibold text-center mb-4">Product Details</h2>

            <div class="card">
                <div class="card-body">
                    <h5 class="text-xl font-semibold mb-2">{{ $product->name }}</h5>
                    <p class="text-gray-700 mb-4"><strong>Description:</strong> {{ $product->description }}</p>
                    <p class="text-gray-700 mb-4"><strong>Category:</strong> {{ $product->category }}</p>
                    <div class="flex space-x-4">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form method="post" action="{{ route('products.destroy', $product->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
