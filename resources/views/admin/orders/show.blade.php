@extends('layouts.back')

@section('content')
    <table class="table">
        <tr>
            <th>Order ID</th>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <th>Customer Name</th>
            <td>{{ $order->customer_name }}</td>
        </tr>
        <tr>
            <th>Customer Phone</th>
            <td>{{ $order->customer_phone }}</td>
        </tr>
    </table>

    <h3>Purchased Items</h3>

    <table class="table">
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Sub Total</th>
        </tr>

        @foreach (unserialize($order->cart)->items as $item)
            <tr>
                <td>{{ $item['item']->name }}</td>
                <td>{{ $item['qty'] }}</td>
                <td>{{ $item['item']->price }}</td>
                <td>{{ $item['price'] }}</td>
            </tr>
        @endforeach
            <tr>
                <td></td>
                <td></td>
                <td>Grand Total</td>
                <td>{{ unserialize($order->cart)->totalprice }}</td>
                <td></td>
            </tr>

    </table>
@stop