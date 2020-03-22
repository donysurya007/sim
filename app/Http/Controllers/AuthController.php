<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('name','password')))
        {
            return redirect('/dashboard');
        }
        return redirect('/logins');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/logins');
    }

    public function register(Request $request, User $user)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
      ]);
      $user->create([
        'name'           => $request->name,
        'email'          => $request->email,
        'password'       => bcrypt($request->password),
        'remember_token' => bcrypt($request->email),
      ]);
    }
    public function loginapi(Request $request, User $user)
    {
      if(!auth::attempt(['name' => $request->name, 'password' => $request->password]))
    {
        return response()->json(['error' => 'username or password wrong'],401);
    }
    $user = $user->find(auth::user()->id);
    return response()->json([
      'name' => $user->name,
      'email' =>$user->email,
    ]);
  }
}
