<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterSaveRequest;
use App\Http\Requests\StoreUserRequest;
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

    public function save_user(StoreUserRequest $request){

           $datas = [

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

           ];

            // dd($datas);

          User::create($datas);

          // $this->controlPassword($user, $request);

             Auth::attempt($request->only(['email', 'password']));

             return redirect('/products');

            // dd('oooooooo');

          //  dd(Hash::make($2y$10$JXh.Ym/bNUye4BmXNIwyNO9xxQVKoqQbFNnk/b4CsTPwQ6jYJ61cS));




    }

   /* public function controlPassword(User $user, Request $request)
    {
        if(request('password'))
        {
           $password_got = $this->validate($request, [
                'password' => 'required|confirmed'
            ]);

            $password_crypted = Hash::make($password_got);

            $user->update([

                'password' => $password_crypted

            ]);
        }
    }*/
}
