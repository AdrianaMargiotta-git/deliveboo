<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Typology;

class UserController extends Controller
{
  public function show($id) {

    $user = User::findOrFail($id);

    return view('pages.user-show',compact('user'));
  }

}
