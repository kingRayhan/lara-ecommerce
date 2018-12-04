@extends('layouts.front')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="margin-bottom: 25px;">
                    <form action="{{ route('orders.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="customer_name">আপনার নাম</label>
                            <input class="form-control" type="text" name="customer_name" id="customer_name">
                        </div>
                        <div class="form-group">
                            <label for="customer_phone">ফোন নাম্বার</label>
                            <input class="form-control" type="text" name="customer_phone" id="customer_phone">
                        </div>
                        <div class="form-group">
                            <label for="customer_email">ইমেইল ( না দিলেও হবে )  </label>
                            <input class="form-control" type="text" name="customer_email" id="customer_email">
                        </div>
                        <div class="form-group">
                            <label for="customer_address">আপনার ঠিকানা </label>
                            <textarea class="form-control" name="customer_address" id="customer_address" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">আমি নিশ্চিত ভাবে কিনতে চাই</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@stop



