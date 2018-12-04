@extends('layouts.back')

@section('content')
    <div class="py-3">
        <h3>Add New Product</h3>
    </div>
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Product Name">
        </div>

        <div class="form-group">
            <input type="number" class="form-control" name="price" placeholder="Product Price">
        </div>
        
        <div class="form-group">
            <select name="category_id" class="form-control">
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
@stop