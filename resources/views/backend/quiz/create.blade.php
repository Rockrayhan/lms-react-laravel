@extends('backend.layouts.app')


@section('content')
<h1 class="text-red-600"> Create Quiz </h1>
 
@if ($errors->any())
<div class="p-2 text-white bg-red-500 rounded-lg shadow-md w-3/5">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form class="max-w-sm mx-auto" method="POST" action="{{ route('quiz.store') }}">
  @csrf

  {{-- Course --}}
  <div class="mb-5">
      <label class="block mb-2 text-sm font-medium">Course</label>
      <select name="course" class="bg-gray-500">
          <option class="bg-gray-500" value="">Select a Course</option>
          @foreach ($cats as $item)
          <option class="bg-gray-500" value="{{ $item['id'] }}"> {{ $item['name'] }} </option>
          @endforeach
      </select>
  </div>

  {{-- Question --}}
  <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-white">Question</label>
      <textarea name="question" cols="20" rows="5"
          class="p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          required>{{ old('question') }}</textarea>
  </div>

  {{-- Options --}}
  @for ($i = 1; $i <= 4; $i++) <div class="mb-5">
      <label class="block mb-2 text-sm font-medium text-white">Option {{ $i }}</label>
      <input type="text" name="option{{ $i }}" class="p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          required>
      </div>
      @endfor

      {{-- Correct Answer --}}
      <div class="mb-5">
          <label class="block mb-2 text-sm font-medium text-white">Correct Answer</label>
          <select name="correct_answer" class="bg-gray-500" required>
              <option value="">Select Correct Answer</option>
              @for ($i = 1; $i <= 4; $i++) <option value="option{{ $i }}">Option {{ $i }}</option>
                  @endfor
          </select>
      </div>

      {{-- Marks --}}
      <div class="mb-5">
          <label class="block mb-2 text-sm font-medium text-white">Marks</label>
          <input type="number" name="marks" class="p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required>
      </div>

      <button type="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>



@endsection