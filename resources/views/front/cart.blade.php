@extends('layouts.front')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('partials.sidebar')
            </div>
            <div class="col-sm-9 padding-right">
                <div class="py-3">
                    <h2 class="section-title">Cart</h2>
                </div>
                @if( $cart->items )
                <div>
                    <table class="table">
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Sub Total</th>
                            <th></th>
                        </tr>

                        @foreach ($cart->items as $item)
                            <tr>
                                <td>{{ $item['item']->name }}</td>
                                <td>{{ $item['qty'] }}</td>
                                <td>{{ $item['item']->price }}</td>
                                <td>{{ $item['price'] }}</td>
                                <td>
                                    <form action="{{ route('removeFromCart' , $item['item']->id ) }}" method="post" style="display: inline">
                                        @csrf
                                        <button class="btn btn-primary">⤫</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Grand Total</td>
                                <td>{{ $cart->totalprice }}</td>
                                <td></td>
                            </tr>

                    </table>
                    <a href="{{ route('checkout') }}" class="btn btn-primary">কিনে ফেলুন</a>
                </div>
                @else
                <div class="card">
                    <div class="card-body text-center">
                        <h4>কার্ট এ কোন প্রোডক্ট এড করা হয়নি।</h4>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@stop