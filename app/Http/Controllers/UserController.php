<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function LoginProcess(Request $request)  {

      $validatedData = $request->validate([
        'login_username' => 'required',
        'login_password' => 'required',
    ]);

      if ($request->login_username == 'admin') {
        if ($request->login_password == 'admin123') {
          session([
                    'user_log' => 1,
                    'user_admin' => 1,
                    'user_username' => 'admin',
                  ]);

          return redirect()->route('admin-panel');
        }
        else {
          return redirect()->back()->with('error','ไอดีหรือพาสเวิร์ดผิด');
        }
      }
      else {
        return redirect()->back()->with('error','ไอดีหรือพาสเวิร์ดผิด');
      }

    }
}
