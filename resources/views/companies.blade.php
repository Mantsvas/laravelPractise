@extends('layout.master')

@section('content')
@if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
@endif
<a class="btn btn-warning" href="{{route('createCompany.page')}}">Create Company</a>
  <table>
    <tr>
      <th>Company Name</th>
      <th>Description</th>
      <th>Country</th>
      <th>Address</th>
    </tr>
    @foreach($companies as $company)
      <tr>
        <td> <a href="{{route('company.page',$company->id)}}"> {{$company->name}}</a></td>
        <td>{{$company->description}}</td>
        <td>{{$company->country}}</td>
        <td>{{$company->adress}}</td>
      </tr>


    @endforeach
  </table>
@endsection
