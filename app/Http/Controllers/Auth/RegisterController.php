<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function register_section()
    {
        return view('auth.register');
    }

    public function save_user(Request $request){

         $datas = $this->validate($request, [

                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'

           ]);

             User::create($datas);

             Auth::attempt($request->only(['email', 'password']));

             return redirect('/');

            // dd('oooooooo');

          //  dd(Hash::make($2y$10$JXh.Ym/bNUye4BmXNIwyNO9xxQVKoqQbFNnk/b4CsTPwQ6jYJ61cS));




    }
}
