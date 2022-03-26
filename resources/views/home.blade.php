@extends('layouts.app')

@section('content')

<div class="container text-center alert-link">
    <h1><i>Welcome to Flowelto Shop</i></h1>
    <h2>The Best Flower Shop in Binus University</h2>
</div>
<div class="pagination justify-content-center">
    <div class="container row justify-content-center">
        @foreach($categories as $category)
        <div class="card bg-card col-5 p-2 m-4">
            <a href="{{route('view', $category->id)}}">
                <img class="card-img-top" src="/storage/categories/{{ $category->image}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <p class="card-text text-center h4 alert-link">{{ $category->name}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection