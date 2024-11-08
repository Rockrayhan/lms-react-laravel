@extends('backend.layouts.app')


@section('content')
<h1 class="text-red-600"> Insert Message </h1>
 


<form class="max-w-sm mx-auto" method="POST" action="{{route('msg.store')}}">
    @csrf
 {{-- Instructor --}}
 <div class="mb-5">
    <label  class="block mb-2 text-sm font-medium ">Instructor</label>
    <select name="instructor" class="bg-gray-500">
      <option class="bg-gray-500" value="">Select a Instructor</option>  
      @foreach ($instructor as $item)
      <option class="bg-gray-500" value="{{$item['id']}}" > {{$item['name']}} </option>  
      @endforeach
    </select>
  </div>

  <br>
  <input name="student" type="text" class="text-black" value="{{ Auth::guard('student')->user()->id }}"> <br>
  <br>

  <textarea name="msg" class="text-black" name="msg" id="" cols="30" rows="10"></textarea>


    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  


@endsection