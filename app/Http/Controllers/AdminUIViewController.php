<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUIViewController extends Controller
{
    public function ShowAdmin() {
      return view('backend.admin');
    }
}
