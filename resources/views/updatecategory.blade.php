@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="card bg-transparent border-0 mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img class="card-img-top" src="/storage/categories/{{$categories[$id-1]->image}}" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body alert-link">
                    <form action="{{route('submitupdatecategory')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-2">
                                    <label for="category" class="col-form-label">Flower Name</label>
                                </div>
                                <div class="col-md-10">
                                    <input class="col-md-6" type="text" name="name" value="{{$categories[$id-1]->name}}" required>
                                </div>
                            </div>
                            @error('name')
                            <div class="row pb-20">
                                <div class="col-100 t-center error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                            @enderror

                            <div class="row g-3 align-items-center">
                                <div class="col-md-2">
                                    <label for="image" class="col-form-label">Flower Image</label>
                                </div>
                                <div class="col-auto">
                                    <input type="file" name="image" onchange="loadimage()">
                                </div>
                            </div>
                            @error('image')
                            <div class="row pb-20">
                                <div class="col-100 t-center error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                            @enderror

                            <button class="btn-search mr-20" type="submit" name="update" value="{{$id}}">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection