@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="card bg-transparent border-0 mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img class="card-img-top" src="/storage/flowers/{{$flowers->image}}" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body alert-link">
                    <h1 class="card-title">{{$flowers->name}}</h1>
                    <h4 class="card-text" style="color: var(--orange);">Rp {{$flowers->price}}</h4>
                    <p class="card-text">{{$flowers->description}}</p>

                    @if(Auth::check())
                        @if(!Auth::user()->manager)
                        <div>
                            Quantity
                        </div>
                        @endif
                    @else
                        <div>
                            Quantity
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection