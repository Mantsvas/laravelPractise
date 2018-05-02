@extends('layout.master')
@section('content')

<div class="row">

  <div class="col-sm-4 my-4">
    <div class="card">
      <img class="card-img-top" src="http://placehold.it/300x200" alt="">
      <div class="card-body">
        <h4 class="card-title">{{$product->name}}</h4>
        <p class="card-text">{{$product->description}}</p>
      </div>
      
    </div>
  </div>

</div>

@endsection
