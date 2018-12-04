@extends('layouts.front')

@section('content')
{{-- @include('partials.slider') --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('partials.sidebar')
            </div>
            <div class="col-sm-9 padding-right">
                <div class="product-loop">
                    @foreach ($products as $product )
                        @include('partials.product' , $product )
                    @endforeach
                </div>           
                <div class="text-center">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@stop