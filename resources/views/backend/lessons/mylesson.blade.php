@extends('backend.layouts.app')


@section('content')
<h1 class="text-center text-teal-400 text-3xl"> My Topics </h1>

@if (session('msg'))
    <div class="col-sm-12">
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-gray-600" role="alert">
            {{ session('msg') }}
                <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
            </div>
    </div>
@endif
 

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    SL
                </th>
                <th scope="col" class="px-6 py-3">
                    Topic name
                </th>
                <th scope="col" class="px-6 py-3">
                    Course Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
               
                <th scope="col" class="px-6 py-3">
                    <span>Action</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @php $sl = 1  @endphp
            @foreach ($lesson as $item)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $sl++ }}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['name']}}
                </td>
                <td scope="row" class="px-6 text-wrap py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item->product->name}}
                </td>
                <td scope="row" class="px-6  py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['description']}}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="category/delete/{{$item['id']}}"> delete </a>
                    <a href="category/edit/{{$item['id']}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection