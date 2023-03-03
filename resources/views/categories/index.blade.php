@extends('app')

@section('content')
<h3 class="text-2xl mb-2">Categories overview</h3>
<ul>
    @foreach($categories as $category)
        <li> {{ $category->name }}
            <ul>
                @foreach($category->products as $product)
                    <li> {{ $product->name }} </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
@endsection
