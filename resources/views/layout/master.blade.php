<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Business Frontpage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/business-frontpage.css')}}" rel="stylesheet">

  </head>
@include('layout.nav')

  <header class="business-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-3 text-center text-white mt-4">Business Name or Tagline</h1>
        </div>
      </div>
    </div>
  </header>
  <body>
<div class="row">

  <div class="col-md-9">

    @yield('content')
  </div>
  <div class="col-md-3">

    @include('layout.aside')
  </div>
</div>


</body>
  @include('layout.footer')
<!-- Bootstrap core JavaScript -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

</html>
