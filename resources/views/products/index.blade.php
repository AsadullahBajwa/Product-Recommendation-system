@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
            <h2 class="text-3xl font-semibold text-center mb-4">Product List</h2>

            <!-- @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @endif -->

            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Category</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="border px-4 py-2">{{ $product->id }}</td>
                                <td class="border px-4 py-2">{{ $product->name }}</td>
                                <td class="border px-4 py-2">{{ $product->description }}</td>
                                <td class="border px-4 py-2">{{ $product->category }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info bg-blue-500 hover:underline mr-2">View</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning bg-yellow-500 hover:underline mr-2">Edit</a>
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger bg-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
