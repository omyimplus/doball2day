<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIViewController extends Controller
{
    public function ShowLogin() {
      return view('pages.member.login');
    }
}
