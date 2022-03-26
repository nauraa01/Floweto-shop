@extends('layouts.app')

@section('content')
<div class="pagination justify-content-center">
    <div class="container justify-content-center">
        <div class="card bg-transparent border-0 mb-3">
            <div class="card-body alert-link">
                <form action="{{route('submitaddflower')}}" method="POST" enctype="multipart/form-data">
                    <h1 class="text-center">Add New Flower</h1>
                    @csrf
                    <div>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4 text-right">
                                <label for="category" class="col-form-label">Category</label>
                            </div>
                            <div class="col-md-8">
                                <select class="col-md-auto" id="category" name="category">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
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
                            <div class="col-md-4 text-right">
                                <label for="category" class="col-form-label">Flower Name</label>
                            </div>
                            <div class="col-md-8">
                                <input class="col-md-6" type="text" name="name" value="" required>
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
                            <div class="col-md-4 text-right">
                                <label for="price" class="col-form-label">Price</label>
                            </div>
                            <div class="col-md-8">
                                <input class="col-md-6" type="number" name="price" value="" required>
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
                            <div class="col-md-4 text-right">
                                <label for="description" class="col-form-label">Description</label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="col-md-6" type="text" name="description" value="" required></textarea>
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
                            <div class="col-md-4 text-right">
                                <label for="image" class="col-form-label">Flower Image</label>
                            </div>
                            <div class="col-auto">
                                <input type="file" name="image" onchange="loadimage()" required>
                            </div>
                        </div>
                        @error('image')
                        <div class="row pb-20">
                            <div class="col-100 t-center error" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                        @enderror
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4 text-right">
                            </div>
                            <div class="col-auto">
                                <button class="btn-search mr-20" type="submit" name="update" value="">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection