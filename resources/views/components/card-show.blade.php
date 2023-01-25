@extends('components/layout')

@section('content')
<div class="flex justify-center">
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
      <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
      <p class="text-gray-700 text-base mb-4">
        Some quick example text to build on the card title and make up the bulk of the card's
        content.
      </p>
      <p></p>
      <h3>About the client:</h3>
      <h4>(location)</h4> <br>
      <h4>Email:</h4> <span>mail@example.com</span>
      <h4>Phone:</h4> <span>+99999999</span>
      <h4>Project Id:</h4> <span>#9999999</span>
      <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View Comments</button>
    </div>
  </div>
@endsection