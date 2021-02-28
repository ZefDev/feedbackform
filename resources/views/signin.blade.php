@extends('layout')

@section('title', 'books')
@section('content')
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-3 text-center">
  <main class="form-signin">
    <form class="needs-validation was-validated" action = "{{ route('signin.authenticate') }}" novalidate="" method = "post">
      @csrf
      <div class="py-5 text-center">
          <h2>Please sign in</h2>
      </div>
      <label for="email" class="visually-hidden">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="password" class="visually-hidden">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
      </br>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
  </main>
  </div>
  <div class="col-md-4"></div>
</div>
@endsection
