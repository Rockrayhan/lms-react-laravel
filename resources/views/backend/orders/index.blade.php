@extends('backend.layouts.app')


@section('content')
<h1 class="text-4xl text-center my-2"> All Enrolls </h1>

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
@if (session('pendingMsg'))
    <div class="">
        <div class="p-4 text-white bg-red-500 rounded-lg shadow-md">
            {{ session('pendingMsg') }}
        </div>
    </div>
@endif



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex gap-4 justify-end p-5">
    </div>
    <table id="productTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <!-- ... your table headers ... -->
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    SL
                </th>
                <th scope="col" class="px-6 py-3">
                    Student Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3">
                    price
                </th>
                <th scope="col" class="px-6 py-3">
                    Payment Method
                </th>
                <th scope="col" class="px-6 py-3">
                    Transaction ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                  Change Status
                </th>
                <th scope="col" class="px-6 py-3">
                  Invoice
                </th>
                <th scope="col" class="px-6 py-3">
                Action
                </th>
            </tr>
        </thead>

        <tbody>
            @php
                $sl = 1;
            @endphp
            @foreach ($orders as $item)
            <tr class="product-row bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$sl++}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['student_name']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['phone']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['email']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['product_name']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['price']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['payment']}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['t_id']}}
                </td>
                {{-- <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$item['status']== 1 ? "Confirmed" :  "Pending"  }}
                </td> --}}

                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {!! $item['status'] == 1 ? "<span class='bg-blue-800 p-1 rounded rounded-2'> Confirmed </span>" : "<span class='bg-yellow-800 p-1 rounded rounded-2'> Pending </span>" !!}
                </td>
                

                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-white">

                    <form action="{{route('order.status' , $item['id'] )}}" method="POST">
                        @csrf
                            <select name="status" class="bg-black block p-1">
                                <option selected disabled value="">Select One</option>
                                <option value="0">Pending</option>
                                <option value="1">Confirm</option>
                            </select>
                            <button type="submit" class="bg-teal-900 rounded rounded-2 p-1 mt-3"> change status</button>
                    </form>
                    
                </td>   

                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{url('invoice/'. $item['id'] )}}"> Invoice </a>
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

@endsection