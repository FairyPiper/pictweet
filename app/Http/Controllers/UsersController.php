<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Tweet;

class UsersController extends Controller
{
    public function show($id)
    {//
      $user = Auth::user();
      $tweets = $user->tweets()->orderBy('created_at', 'DESC')->paginate(5);

      return view('users.show')->with(array('user' => $user, 'tweets' => $tweets));
    }
}
