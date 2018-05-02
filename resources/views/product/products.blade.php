@extends('layout.master')
@section('content')
<main>
<div class="row">
  @foreach($products as $product)
  <div class="col-sm-4 my-4">
    <div class="card">
      <img class="card-img-top" src="http://placehold.it/300x200" alt="">
      <div class="card-body">
        <h4 class="card-title">{{$product->name}}</h4>
        <p class="card-text">{{$product->description}}</p>
      </div>
      <div class="card-footer">
        <a href="{{route('product.page',$product->id)}}" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</main>
@endsection
