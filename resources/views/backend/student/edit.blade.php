@extends('backend.layouts.app')


@section('content')
<h1 class="text-red-600"> Edit Category </h1>
 


<form class="max-w-sm mx-auto" method="POST" action="/category/update/{{$cats['id']}}">
    @csrf
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Category Name</label>
      <input type="text" name="name"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('name')}}" required>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  


@endsection