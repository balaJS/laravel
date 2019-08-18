<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\auth as MyAuth;

class Auth extends Controller {
  //

  public function login_form($viewdata = []) {
    $viewdata = $viewdata ? $viewdata : ['title'=> 'Admin Login portal', 'pageClass'=> 'admin-login'];
    return view('/admin/login', $viewdata);
  }

  public function login(Request $request) {
    $username = $request->email;
    $password = $request->password;

    $user = MyAuth::where([
      ['email', '=', $username],
      ['password', '=', $password]
    ])->get();

    if (count($user) > 0) {

      $user_data = [
        'user_data' => [
          'id' => $user[0]->id,
          'name' => $user[0]->name
        ]
      ];

      Session::put('MyApp', $user_data);
      return redirect('/admin/profile');
    } else {
      return $this->auth_fail();
    }
  }

  public function logout() {
    Session::forget('MyApp');
    $data = ['title'=> 'Admin Login portal', 'pageClass'=> 'admin-logout'];
    return redirect('/admin/login');
  }

  public function auth_fail() {
    $data = ['title'=> 'Admin Login portal', 'pageClass'=> 'admin-login-fail'];
    return redirect('/admin/login');
  }
  
  public function isAuth() {
    return !!Session::get('MyApp')['user_data'];
  }

  public function show_profile() {
    if (!$this->isAuth()) {
      return redirect('/admin/login');
    }
    return view('admin/profile', ['title'=> 'Admin portal', 'pageClass'=> 'admin-profile']);
  }
}
