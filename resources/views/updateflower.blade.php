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
                    <form action="{{route('submitupdateflower')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-2">
                                    <label for="category" class="col-form-label">Category</label>
                                </div>
                                <div class="col-md-10">
                                    <select class="col-md-5" id="category" name="category">
                                        @foreach($categories as $category)
                                            @if($flowers->category == $category->id)
                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                            @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('category')
                            <div class="row pb-20">
                                <div class="col-100 t-center error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                            @enderror

                            <div class="row g-3 align-items-center">
                                <div class="col-md-2">
                                    <label for="category" class="col-form-label">Flower Name</label>
                                </div>
                                <div class="col-md-10">
                                    <input class="col-md-6" type="text" name="name" value="{{$flowers->name}}" required>
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
                                    <label for="price" class="col-form-label">Price</label>
                                </div>
                                <div class="col-md-10">
                                    <input class="col-md-6" type="number" name="price" value="{{$flowers->price}}" required>
                                </div>
                            </div>
                            @error('price')
                            <div class="row pb-20">
                                <div class="col-100 t-center error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                            @enderror

                            <div class="row g-3 align-items-center">
                                <div class="col-md-2">
                                    <label for="description" class="col-form-label">Description</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea class="col-md-6" type="text" name="description" value="" required>{{$flowers->description}}</textarea>
                                </div>
                            </div>
                            @error('description')
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

                            <button class="btn-search mr-20" type="submit" name="update" value="{{$flowers->id}}">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection