<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\GoogleUser;
use Auth;
use Exception;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
           $user = Socialite::driver('google')->user();
           $finduser = GoogleUser::where('google_id', $user->id)->first();
        //    dd($user->id);
       
        if ($finduser) {
            Auth::login($finduser);
            // dd(berhasil);
            return redirect()->intended('booking/cek-kamar');
        }else {
           
            $newuser = GoogleUser::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,
            ]); 
            Auth::login($newuser);
            return redirect()->intended('booking/cek-kamar');
        }

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
