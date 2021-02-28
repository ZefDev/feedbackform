@extends('layout')

@section('title', 'books')
@section('content')
<div class="container" id="content_container">
  <div class="row">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://bootstrap-4.ru/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h2>Edit form</h2>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <form class="needs-validation was-validated" action = "{{ route('requests.update') }}" novalidate="" method = "post">
      @csrf
      <input type="hidden" name="id_req" value="{{$requests->id}}"/>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{$requests->email}}" required>
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="input" class="form-control" id="name"  name="name" placeholder="name" value="{{$requests->name}}" required>
      </div>
      <div class="form-group">
        <label for="number_phone">Number phone</label>
        <input type="number" class="form-control" id="number_phone"  name="number_phone" placeholder="Number phone" value="{{$requests->number_phone}}" required>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <input type="input" id="status" name="status" value="{{$requests->status}}" required></input>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3" required>{{$requests->message}}</textarea>
      </div>
      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send"></input>
    </form>
  </div>
  <div class="col-md-2"></div>
  </div>
</div>
@endsection
