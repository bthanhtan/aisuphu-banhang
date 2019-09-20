@extends('admin.master')

@section('title', 'Page Title')

@section('content')
        
        <form class="user" enctype="multipart/form-data" action="{{ isset($order->id) ?  route('admin.order_update',['id'=>$order->id]) : route('admin.order_store')}}" method="post">
            @if(isset($order->id))
            @method('put')
            @endif
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">user_id</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_id" value="{{ old('user_id', $order->user_id ?? '') }}">
                <label for="exampleInputEmail1">order_Date</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="order_date" value="{{ old('order_date', $order->order_date ?? '') }}">
                <label for="exampleInputEmail1">Shipment_address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="shipment_address" value="{{ old('shipment_address', $order->shipment_address ?? '') }}">
                <label for="exampleInputEmail1">Shipment_name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="shipment_name" value="{{ old('shipment_name', $order->shipment_name ?? '') }}">
                <label for="exampleInputEmail1">Received_date</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="received_date" value="{{ old('received_date', $order->received_date ?? '') }}">
                <label for="exampleInputEmail1">Status</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="status" value="{{ old('status', $order->status ?? '') }}">
                <label for="exampleInputEmail1">Total</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="total" value="{{ old('total', $order->total ?? '') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@stop