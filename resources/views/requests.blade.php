@extends('layout')

@section('title', 'books')
@section('content')
<div class="container" id="content_container">
  <div class="row">
    <div class="py-5 text-center">
        <h2>Requests</h2>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number phone</th>
            <th scope="col">Message</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($requests as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->number_phone}}</td>
            <td>{{$item->message}}</td>
            <td>{{$item->status}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-1"></div>
    </div>
</div>
{{$requests->links()}}
@endsection
