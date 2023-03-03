@extends('app')

@section('content')
    <h3 class="text-2xl mb-2">Products overview</h3>
    <ul>

        @foreach($products as $product)
            <li> {{ $product->name }} - {{ $product->category->name }} </li>
        @endforeach
    </ul>

@endsection
