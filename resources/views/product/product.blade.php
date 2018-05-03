@extends('layout.master')
@section('content')


<a class="btn btn-warning" href="{{route('editProduct.page',$product->id)}}">Edit</a>

<form class="" action="{{route('deleteProduct.page',$product->id)}}" method="post">
  @csrf
  @method('Delete')
  <button class="btn btn-warning" type="submit">Delete</button>
</form>
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
