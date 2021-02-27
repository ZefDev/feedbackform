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
  <body class="bg-light">

    <main>
        @yield('content')
    </main>

  </body>
  <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('js/main.js')}}"></script>
</html>
