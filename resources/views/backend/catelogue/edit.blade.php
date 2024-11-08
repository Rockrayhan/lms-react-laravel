@extends('backend.layouts.editorApp')


@section('content')
<h1 class="text-red-600"> Edit Catelogue </h1>
 
@if ($errors->any())
<div class="p-4 text-white bg-red-500 rounded-lg shadow-md">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form class="max-w-sm mx-auto" method="POST" action="/product/update/{{$data['product']->id}}">
    @csrf
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Product Name</label>
      <input type="text" name="name"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data['product']->name}}" required>
    </div>

    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Product Description</label>
      <textarea class="bg-gray-700" name="desc" cols="50" rows="5" ></textarea>
    </div>

    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Price</label>
      <input type="text" name="price"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$data['product']->price}}" required>
    </div>

    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium ">Category</label>
      <select name="cats" class="bg-gray-500">
        @foreach ($data2['cats'] as $item)
        <option class="bg-gray-500" value="{{$item['id']}}"> {{$item['name']}} </option>  
        @endforeach
  
      </select>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  


@endsection