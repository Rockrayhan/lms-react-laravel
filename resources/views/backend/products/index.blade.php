@extends('backend.layouts.app')


@section('content')
<h1 class="text-4xl text-center my-2"> All Products </h1>

@if (session('msg'))
    <div class="">
        <div class="p-4 text-white bg-green-500 rounded-lg shadow-md">
            {{ session('msg') }}
        </div>
    </div>
@endif
@if (session('msg_delete'))
    <div class="">
        <div class="p-4 text-white bg-red-500 rounded-lg shadow-md">
            {{ session('msg_delete') }}
        </div>
    </div>
@endif



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex gap-4 justify-end p-5">
        <!-- Category Filter -->
        <div class="mb-4">
            <label for="categoryFilter" class="text-sm font-medium text-gray-500 dark:text-gray-400">Filter by Category:</label>
            <select id="categoryFilter" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="">All Categories</option>
                @foreach ($cats as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>



    <table id="productTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <!-- ... your table headers ... -->
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Desription
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    InsTructor Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
               
                <th scope="col" class="px-6 py-3">
                Action
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $item)
                <tr class="product-row bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600" data-category="{{ $item->category->id }}">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item['name']}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item['description']}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item['price']}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->category->name}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->instructor->name}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{asset('images/'.$item['image'])}}" height="50px" width="50px" alt="">
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="product/delete/{{$item['id']}}"> delete </a>
                        <a href="product/edit/{{$item['id']}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>  
                </tr>
            @endforeach
        </tbody>
    </table>
</div>








<script>
    // Add an event listener to handle changes in the category filter
    document.getElementById('categoryFilter').addEventListener('change', handleFilterChange);

    function handleFilterChange() {
        // Get the selected value from the category filter
        var selectedCategory = document.getElementById('categoryFilter').value;

        // Filter the table rows based on the selected value
        var rows = document.querySelectorAll('.product-row');
        rows.forEach(function (row) {
            var categoryMatch = selectedCategory === '' || row.getAttribute('data-category') === selectedCategory;

            if (categoryMatch) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    }
</script>

@endsection