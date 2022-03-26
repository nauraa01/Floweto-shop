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
            <img class="card-img-top" src="/storage/categories/{{ $category->image}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-center h4 alert-link">{{ $category->name}}</p>
                @if(Auth::check())
                @if(Auth::user()->manager)
                <div class="row justify-content-center">
                    <button form="delete-form" type="submit" class="btn btn-danger col-6" name="delete" value="{{$category->id}}">Delete Category</button>
                    <a class="btn btn-primary col-6" href="{{route('updatecategory', $category->id)}}">Update Category</a>
                    <form id="delete-form" class="" action="{{route('deletecategory')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    </form>
                </div>
                @endif
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection