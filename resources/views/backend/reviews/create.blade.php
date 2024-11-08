@extends('backend.layouts.app')


@section('content')
    <h1 class="text-red-600"> Insert Lesson </h1>



    <form class="max-w-sm mx-auto" method="POST" action="{{ route('review.store') }}">
        @csrf

        <input type="hidden" name="student_id" value="{{ Auth::guard('student')->user()->id }}"
            class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required>


        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-white">Review title</label>
            <input type="text" name="name"
                class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text">Description</label>
            <textarea name="description" id="" cols="30" rows="5"></textarea>
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-white">Student Occupation</label>
            <input type="text" name="occupation"
                class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>



        <div class="mb-5 w-75">
            <label class="block mb-2 text-sm font-medium text-white">Give Star Rating</label>

            One Star <input type="radio" value="1"  name="rating"> <br>
            Two Star <input type="radio" value="2"  name="rating"> <br>
            Three Star <input type="radio" value="3" name="rating"> <br>
            Four Star <input type="radio" value="4" name="rating"> <br>
            Five Star <input type="radio" value="5" name="rating"> <br>
        </div>


        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection
