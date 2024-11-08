@extends('backend.layouts.app')


@section('content')
    <h1 class="text-teal-600 font-bold text-3xl text-center my-6"> Insert Topic </h1>



    <form class="max-w-sm mx-auto" method="POST" action="{{ route('lesson.store') }}">
        @csrf

        {{-- <div class="mb-5"> --}}
        {{-- <label  class="block mb-2 text-sm font-medium text-white">Instrutor id</label> --}}
        {{-- check if there is admin he will be able to make dropdown select instructor
          or if there is instructor then it will remain like this(he will be selected automatically)
        --}}

        @if (Auth::guard('admin')->check())
            {{-- Instructor ID --}}

            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium ">Choose Instructor</label>
                <select name="instructor_id" class="bg-gray-500">
                    <option class="bg-gray-500" value="">Select Instructor</option>
                    @foreach ($instructors as $item)
                        <option class="bg-gray-500" value="{{ $item['id'] }}"> {{ $item['name'] }} </option>
                    @endforeach
                </select>
            </div>
        @else
            <input type="hidden" name="instructor_id" value="{{ Auth::guard('instructor')->user()->id }}"
                class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        @endif


        {{-- </div> --}}


        {{-- select Course --}}
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium ">Course</label>
            <select name="cats" class="bg-gray-500">
                <option class="bg-gray-500" disabled selected value="">Select a Course</option>
                @foreach ($product as $item)
                    <option class="bg-gray-500" value="{{ $item['id'] }}"> {{ $item['name'] }} </option>
                @endforeach
            </select>
        </div>


        {{-- insert topic name --}}
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-white">Topic Name</label>
            <input type="text" name="name"
                class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>


        {{-- insert topic Description --}}
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-white">Topic Description</label>
            <textarea cols="20" rows="5" name="description"
                class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required> </textarea>
        </div>



        {{-- insert topic video url --}}
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-white">Topic video URL</label>
            <input type="text" name="video"
                class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
        </div>


        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>



@endsection
