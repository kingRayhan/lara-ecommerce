@extends('layouts.back')

@section('content')
    <table class="table">
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->customer_phone }}</td>
                    <td>{{ unserialize($order->cart)->totalprice }}</td>
                    <td><a href="{{ route('orders.show' , $order->id) }}" class="btn btn-primary btn-sm">Details</a></td>
                </tr>
            @endforeach
    </table>
@stop