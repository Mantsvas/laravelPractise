@extends('layout.master')

@section('content')
  <table>
    <tr>
      <th>Company Name</th>
      <th>Description</th>
      <th>Country</th>
      <th>Address</th>
    </tr>
    @foreach($companies as $company)
      <tr>
        <td>{{$company->name}}</td>
        <td>{{$company->description}}</td>
        <td>{{$company->country}}</td>
        <td>{{$company->adress}}</td>
      </tr>


    @endforeach
  </table>
@endsection
