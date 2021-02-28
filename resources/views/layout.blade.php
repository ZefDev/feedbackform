<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form-validation.css')}} " rel="stylesheet">
  </head>
  <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
  <div class="container-fluid d-flex align-items-center">
      <h1 class="d-flex align-items-center fs-4 text-white mb-0">
        Feed back form
      </h1>
      @if(Auth::check())
      <a href="{{route('logout')}}" class="ms-auto link-light" hreflang="ar">Logout</a>
      @else
        <a href="{{route('signin')}}" class="ms-auto link-light" hreflang="ar">Sign in</a>
      @endif
    </div>
  </header>
  <body class="bg-light">

    <main>
        @yield('content')
    </main>

  </body>
  <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('js/main.js')}}"></script>
</html>
