@extends('backend.layouts.app')


@section('content')
<h1 class="text-red-600"> Create Instructor </h1>
 


<form class="max-w-sm mx-auto" method="POST" action="{{route('instructor.store')}}">
    @csrf
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Instructor Name</label>
      <input type="text" name="name"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Email</label>
      <input type="email" name="email"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Password</label>
      <input type="text" name="password"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    {{-- <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Course</label>
      <input type="text" name="product"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div> --}}

    {{-- category --}}
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium ">Category</label>
      <select name="cats" class="bg-gray-500">
        <option class="bg-gray-500" value="">Select a Category</option>  
        @foreach ($cats as $item)
        <option class="bg-gray-500" value="{{$item['id']}}" {{old('cats')==$item['id'] ? 'selected': '' }} > {{$item['name']}} </option>  
        @endforeach
      </select>
    </div>

    {{-- category --}}
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium ">Course</label>
      <select name="product" class="bg-gray-500">
        <option class="bg-gray-500" value="">Select a Course</option>  
        @foreach ($courses as $item)
        <option class="bg-gray-500" value="{{$item['id']}}" {{old('cats')==$item['id'] ? 'selected': '' }} > {{$item['name']}} </option>  
        @endforeach
      </select>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  


@endsection