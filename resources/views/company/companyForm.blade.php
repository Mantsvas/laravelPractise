@extends('layout.master')
@section('content')
  <div class="container">

    <form class="" action="{{isset($company) ? route('updateCompany.page',$company->id) : route('storeCompany.page')}}" method="post">

      @if(isset($company))

        @method('Put')
      @endif
        @csrf
        <a href="#"></a>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="name">Name</label>
        </div>
          <div class="col-md-4">
            @if(isset($company))
              <input id='name' type="text" name="name" value="{{$company->name}}">
            @else
              <input id='name' type="text" name="name" value="{{old('name')}}">
             @endif
        </div>
        @if($errors->has('name'))
          <div class="col-md-4">
            {{$errors->first('name')}}
          </div>
        @endif
      </div>



      <div class="form-group row">
        <div class="col-md-4">
          <label for="description">Description</label>
        </div>
          <div class="col-md-4">
            @if(isset($company))
              <input id='description' type="text" name="description" value="{{$company->description}}">
            @else
              <input id='description' type="text" name="description" value="{{old('description')}}">
            @endif
        </div>
        @if($errors->has('description'))
          <div class="col-md-4">
            {{$errors->first('description')}}
          </div>
        @endif
      </div>



      <div class="form-group row">
        <div class="col-md-4">
          <label for="country">Country</label>
        </div>
          <div class="col-md-4">
            @if(isset($company))
              <input id='price' type="text" name="country" value="{{$company->country}}">
            @else
              <input id='price' type="text" name="country" value="{{old('price')}}">
            @endif
          </div>
        @if($errors->has('country'))
          <div class="col-md-4">
            {{$errors->first('country')}}
          </div>
        @endif
      </div>




      <div class="form-group row">
        <div class="col-md-4">
          <label for="adress">Adress</label>
        </div>
          <div class="col-md-4">
            @if(isset($company))
                <input id='adress' type="text" name="adress" value="{{$company->adress}}">
            @else
              <input id='adress' type="text" name="adress" value="{{old('adress')}}">
            @endif

        </div>
        @if($errors->has('adress'))
          <div class="col-md-4">
            {{$errors->first('adress')}}
          </div>
        @endif
      </div>

      <button type="submit" name="button">{{isset($company) ? 'Save Changes' : 'Create Company'}}</button>
    </form>
</div>
@endsection
