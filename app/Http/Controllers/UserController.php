<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return View('signin');
  }
  /**
   * Show the form for creating a new resource.
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function authenticate(Request $request)
  {
    if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
      // Аутентификация успешна
      return redirect('/requests');
    }
  }

  /**
   * Show the form for creating a new resource.
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function logout(Request $request)
  {
      Auth::logout();
      return redirect('/');
  }

}
