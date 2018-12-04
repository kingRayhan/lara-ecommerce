@extends('layouts.front')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('partials.sidebar')
            </div>
            <div class="col-sm-9 padding-right">
                <h3 class="section-title">Category: <span style="color: #333;">{{ $category->name }}</span></h3>
                <div class="product-loop">
                    @foreach ($products as $product )
                        @include('partials.product' , $product )
                    @endforeach
                </div>
                <div class="text-center">
    
                </div>
            </div>
        </div>
    </div>
</section>
@stop