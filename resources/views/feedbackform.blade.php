@extends('layout')

@section('title', 'books')
@section('content')
<div class="container" id="content_container">
  <div class="row">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://bootstrap-4.ru/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h2>Feedback form</h2>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <form class="needs-validation was-validated" action = "{{ route('requests.create') }}" novalidate="" method = "post">
      @csrf
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="input" class="form-control" id="name"  name="name" placeholder="name" required>
      </div>
      <div class="form-group">
        <label for="number_phone">Number phone</label>
        <input type="number" class="form-control" id="number_phone"  name="number_phone" placeholder="Number phone" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
      </div>
      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send"></input>
    </form>
  </div>
  <div class="col-md-2"></div>
  </div>
</div>
@endsection
