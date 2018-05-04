@extends('layout.master')
@section('content')
<a class="btn btn-warning" href="{{route('editCompany.page',$company->id)}}">Edit Company</a>

<form class="" action="{{route('deleteCompany.page',$company->id)}}" method="post">
  @csrf
  @method('delete')
  <button class="btn btn-warning" type="submit">Delete</button>
</form>

  <li>{{$company->name}}</li>
  <li>{{$company->description}}</li>







@endsection
