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
    //$author = Author::get_author();
    //$author =  Author::with('books')->paginate(6);
    //return View('author',compact('author'));
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
    //$author = Author::get_author();
      $requests =  Requests::paginate(10);
      return View('requests',compact('requests'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Author  $author
   * @return \Illuminate\Http\Response
   */
  public function show(Author $author)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Author  $author
   * @return \Illuminate\Http\Response
   */
  public function edit(Author $author)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Author  $author
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Author $author)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Author  $author
   * @return \Illuminate\Http\Response
   */
  public function destroy(Author $author)
  {
      //
  }
}
