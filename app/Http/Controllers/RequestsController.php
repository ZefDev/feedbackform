<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;

class RequestsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $requests =  Requests::paginate(10);
    return View('requests',compact('requests'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    $item = new Requests;
    $item->name = $request->input('name');
    $item->email = $request->input('email');
    $item->number_phone = $request->input('number_phone');
    $item->message = $request->input('message');
    $item->status = false;
    $item->save();
    return View('welcome');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $requests =  Requests::paginate(10);
      return View('requests',compact('requests'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Requests  $requests
   * @return \Illuminate\Http\Response
   */
  public function show(Requests $requests)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function edit(Request $Request)
  {
    $requests = Requests::find($Request->input('id_req'));
    return View('edit',compact('requests'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Requests  $requests
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Requests $requests)
  {
      $requests = Requests::find($request->input('id_req'));
      $requests->name = $request->input('name');
      $requests->email = $request->input('email');
      $requests->number_phone = $request->input('number_phone');
      $requests->message = $request->input('message');
      $requests->status = (boolean)$request->input('status');
      $requests->save();
      return redirect()->route('requests.store');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Request  $Request
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $Request)
  {
      $requests = Requests::find($Request->input('id_req'));
      $requests->delete();
      return redirect()->route('requests.store');
  }
}
