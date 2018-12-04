@extends('layouts.back')

@section('content')
    <div class="py-3">
        <h3>Add new category</h3>
    </div>
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Category Name"> 
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
@stop