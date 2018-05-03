@extends('layout.master')

@section('content')
  <table>
    <tr>
      <th>Company Name</th>
      <th>Description</th>
      
    </tr>
    @foreach($categories as $category)
      <tr>
        <td>{{$category->name}}</td>
        <td>{{$category->description}}</td>

      </tr>


    @endforeach
  </table>
@endsection
