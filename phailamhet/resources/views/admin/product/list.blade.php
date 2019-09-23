@extends('admin.master')

@section('title', 'List Category')

@section('content')
    <a href="{{route('admin.product_create')}}" class="btn btn-success">Create</a>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>price</th>
            <th>status</th>
            <th>image</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $key => $product)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->status}}</td>
            <td>
              <?php 
                $local_link = "http://localhost/lamchohet/aisuphu-banhang/phailamhet/public/";
                // $local_link = "http://localhost/Laravel/Ai_template/aisuphu-banhang/phailamhet/public/";
                $img_products = $product->images;
                foreach($img_products as  $img_product){?>
                  <img src="{{$local_link}}{{$img_product->src}}" alt="">
               <?php  } ?>  
            </td>
            <td>
                <a class="btn btn-warning" href="{{ route('admin.product_edit',['id'=>$product->id]) }}">Edit</a> <br>
                <form action="{{ route('admin.product_delete',['id'=>$product->id]) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@stop

