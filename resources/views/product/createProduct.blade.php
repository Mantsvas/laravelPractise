@extends('layout.master')
@section('content')
  <div class="container">

    <form class="" action="{{isset($product) ? route('updateProduct.page', $product->id) :route('storeProduct.page')}}" method="post">

      @if(isset($product))

        @method('Put')
      @endif
        @csrf
        <a href="#"></a>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="name">Name</label>
        </div>
          <div class="col-md-4">
            @if(isset($product))
              <input id='name' type="text" name="name" value="{{$product->name}}">
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
            @if(isset($product))
              <input id='description' type="text" name="description" value="{{$product->description}}">
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
          <label for="price">Price</label>
        </div>
          <div class="col-md-4">
            @if(isset($product))
              <input id='price' type="text" name="price" value="{{$product->price}}">
            @else
              <input id='price' type="text" name="price" value="{{old('price')}}">
            @endif
          </div>
        @if($errors->has('price'))
          <div class="col-md-4">
            {{$errors->first('price')}}
          </div>
        @endif
      </div>

      <div class="form-group row">
        <div class="col-md-4">
          <label for="quantity">Quantity</label>
        </div>
          <div class="col-md-4">
            @if(isset($product))
                <input id='quantity' type="text" name="quantity" value="{{$product->quantity}}">
            @else
              <input id='quantity' type="text" name="quantity" value="{{old('quantity')}}">
            @endif

        </div>
        @if($errors->has('quantity'))
          <div class="col-md-4">
            {{$errors->first('quantity')}}
          </div>
        @endif
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="category">Quantity</label>
        </div>
          <div class="col-md-4">
            @if(isset($product))
            <select id="category" name="category_id">
              @foreach($categories as $category)
                <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' :''}}>

                  {{$category->name}}

                </option>

              @endforeach
            </select>
            @else
              <select id="category" name="category_id">
                @foreach($categories as $category)
                  <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' :''}}>

                    {{$category->name}}

                  </option>

                @endforeach
              </select>
            @endif
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <label for="company">Company</label>
        </div>
          <div class="col-md-4">
            @if(isset($product))
              <select id="company" name="manufacturer_id">
                @foreach($companies as $company)
                  <option value="{{$company->id}}" {{$product->manufacturer_id==$company->id ? 'selected':''}}>{{$company->name}}</option>

                  @endforeach
              </select>
            @else
              <select id="company" name="manufacturer_id">
                @foreach($companies as $company)
                  <option value="{{$company->id}}" {{old('manufacturer_id')==$company->id ? 'selected':''}}>{{$company->name}}</option>

                @endforeach
              </select>
            @endif

        </div>
      </div>
      <button type="submit" name="button">{{isset($product) ? 'Save Changes' : 'Create'}}</button>
    </form>

@endsection
