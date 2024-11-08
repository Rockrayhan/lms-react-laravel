@extends('backend.layouts.app')


@section('content')
    <h1> All Reviews </h1>

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
                        Review Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Occupation
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        rating
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Reviewer name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Change Status
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
                @foreach ($reviews as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $sl++ }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item['name'] }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item['occupation'] }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item['description'] }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item['rating'] }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->student->name }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {!! $item['status'] == 1 ? "<span class='bg-blue-800 p-1 rounded rounded-2'> Confirmed </span>" : "<span class='bg-yellow-800 p-1 rounded rounded-2'> Pending </span>" !!}
                        </td>

                        <td scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-white">
                        <form action="{{route('review.status' , $item['id'] )}}" method="POST">
                            @csrf
                                <select name="status" class="bg-black block p-1">
                                    <option selected disabled value="">Select One</option>
                                    <option value="0">cancel</option>
                                    <option value="1">Confirm</option>
                                </select>
                                <button class="bg-teal-900 rounded rounded-2 p-1 mt-3" type="submit"> change status</button>
                            </form>
                            </td>

                        <td class="px-6 py-4 text-right">
                            <a href="category/delete/{{ $item['id'] }}"> delete </a>
                            <a href="category/edit/{{ $item['id'] }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
