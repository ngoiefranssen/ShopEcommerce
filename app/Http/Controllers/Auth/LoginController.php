<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    //
    public function create()
    {
        return view('auth.login');
    }

   public function connexion(Request $request)
    {
        $this->validate($request,[
            'email' => ['required'],
            'password' => ['required']
        ]);

      if (! Auth::attempt($request->only(['email', 'password']))){
        return back()->with('error', 'Email ou mot de passe incorrect');

      };

        return redirect('/');
    }
}
