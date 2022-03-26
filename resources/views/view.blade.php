@extends('layouts.app')

@section('content')

<div class="container justify-content-center">
    <div class="row justify-content-center">
        @foreach($flowers as $flower)
        <div class="card bg-card col-5 p-2 m-4">
            <a href="{{route('flowerdetail', $flower->id)}}">
                <img class="card-img-top" src="/storage/flowers/{{ $flower->image}}" alt="Card image cap">
            </a>
            <div class="card-body">
                <p class="card-text text-center">{{ $flower->name}}</p>
                <p class="card-text text-center">{{ $flower->price}}</p>
                @if(Auth::check())
                @if(Auth::user()->manager)
                <div class="row justify-content-center">
                    <button form="delete-form" type="submit" class="btn btn-danger col-6" name="delete" value="{{$flower->id}}">Delete Flower</button>
                    <a class="btn btn-primary col-6" href="{{route('updateflower', $flower->id)}}">Update Flower</a>
                    <form id="delete-form" class="" action="{{route('deleteflower')}}" method="POST" enctype="multipart/form-data">
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