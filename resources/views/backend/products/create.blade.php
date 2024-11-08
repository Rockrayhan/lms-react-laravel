@extends('backend.layouts.app')


@section('content')
<h1 class="text-red-600"> Insert Product </h1>
 
@if ($errors->any())
<div class="p-2 text-white bg-red-500 rounded-lg shadow-md w-3/5">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form class="max-w-sm mx-auto" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
    @csrf
    {{-- name --}}
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Product Name</label>
      <input type="text" name="name"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{old('name')}}">
    </div>

    {{-- Description --}}
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Product Description</label>
      <textarea class="bg-gray-700" name="desc" cols="50" rows="5"> {{old('desc')}} </textarea>
    </div>

    {{-- price --}}
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-white">Price</label>
      <input type="text" name="price"  class=" p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('price')}}">
    </div>

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
    
    {{-- manufacturer --}}
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium ">manufacturer</label>
      <select name="cats" class="bg-gray-500">
        <option class="bg-gray-500" value="">Select a manufacturer</option>  
        @foreach ($manufacturer as $item)
        <option class="bg-gray-500" value="{{$item['id']}}" {{old('cats')==$item['id'] ? 'selected': '' }} > {{$item['name']}} </option>  
        @endforeach
      </select>
    </div>


      {{-- Image --}}
      <div class="row mb-3">
        <label for="formFile" class="col-sm-2 col-form-label">Image Upload</label>
        <div class="col-sm-10">
            <input class="form-control" type="file" name="photo" id="formFile">
        </div>
    </div>
    




    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  


@endsection