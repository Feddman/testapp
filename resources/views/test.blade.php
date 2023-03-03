@extends('app')

@section('content')
        <h3 class="text-2xl mb-2">Abonneer op de nieuwsbrief!</h3>
        <form class="w-1/4" method="POST" action="{{ route('newsletter.store') }}">
            @csrf
            <div class="flex flex-col space-y-4">
              <label for="name" class="font-medium">Name</label>
              <input id="name" name="name" type="text" class="border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-500">

              <label for="email" class="font-medium">Email</label>
              <input id="email" name="email" type="email" class="border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-500">

              <button type="submit" class="bg-green-500 hover:bg-green-600 text-white rounded-md py-2 px-4 focus:outline-none focus:ring focus:ring-green-200 focus:border-green-500">Submit</button>
            </div>
        </form>
@endsection
