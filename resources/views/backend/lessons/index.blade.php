@extends('backend.layouts.app')


@section('content')
<h1> All Lessons </h1>

@if (session('msg'))
    <div class="col-sm-12">
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-gray-600" role="alert">
            {{ session('msg') }}
                <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
            </div>
    </div>
@endif
 

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex gap-4 justify-end p-5">
        <!-- Product Name Filter -->
        <div class="mb-4">
            <label for="productNameFilter" class="text-sm font-medium text-gray-500 dark:text-gray-400">Filter by Course Name:</label>
            <select id="productNameFilter" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="">All Courses</option>
                @foreach ($products as $product)
                    <option value="{{ $product->name }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Topic name
                </th>
                <th scope="col" class="px-6 py-3">
                    Course Name
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Action</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" data-product="{{ $item->product->name }}">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->name }}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->product->name }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="category/delete/{{ $item->id }}" class="btn btn-danger btn-sm">Delete</a>
                        <a href="category/edit/{{ $item->id }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>







<script>
    document.getElementById('productNameFilter').addEventListener('change', handleFilterChange);

    function handleFilterChange() {
        var selectedProduct = document.getElementById('productNameFilter').value;
        var rows = document.querySelectorAll('tbody tr');

        rows.forEach(function (row) {
            var productMatch = selectedProduct === '' || row.getAttribute('data-product') === selectedProduct;

            if (productMatch) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    }
</script>

@endsection