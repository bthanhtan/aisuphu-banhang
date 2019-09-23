@extends('user.master')


@section('banner')
   <section class="banner shop-banner">
        <div class="overlay"></div>
        <div class="banner-text text-center text-uppercase">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1>Shop with us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('content')
<?php 

        $local_link = 'http://localhost/lamchohet/aisuphu-banhang/phailamhet/public/';
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quatity</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
@foreach ($carts as $key => $cart) 
  <tbody>
    <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$cart->name}}</td>
      <td>{{$cart->qty}}</td>
      <td>{{$cart->price}}</td>
      @foreach ($cart->options as $value)
      <td><img src="{{$local_link}}{{$value}}"></td>
      @endforeach
    </tr>
  </tbody>
@endforeach
</table>
@stop