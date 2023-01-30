<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try{
            //$google_user = Socialite::driver('google')->user();
            $google_user = Socialite::driver('google')->user();
         //   dd($google_user->getId());
            $user = User::where('google_id', $google_user->getId())->first();
 //dd($user);
            if($user == null) {

                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);
                Auth::login($new_user);
                //Session('test',$new_user);
               //dd($new_user);
               session(['user_id'=> Auth::id()]);
                return redirect()->intended('/');
            }else{
                
                Auth::login($user);
                session(['user_id'=> Auth::id()]);
                return redirect()->intended('/');
            }
        }catch(\Throwable $th){
            dd('Something went wrong!'. $th->getMessage());
        }
    }
}
