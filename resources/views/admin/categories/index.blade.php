@extends('layouts.back')

@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@stop

@section('footer')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
</script>
@stop

@section('content')
    <div class="py-3">
        <a class="btn btn-success" href="{{ route('categories.create') }}">Add new</a>
    </div>
    <table class="table" id="datatable">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <form action="{{ route('categories.destroy' , $category->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop