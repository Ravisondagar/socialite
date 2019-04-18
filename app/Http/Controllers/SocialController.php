<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class SocialController extends Controller
{
    public function redirect($provider)
    {
     	return Socialite::driver($provider)->redirect();
    }

    public function Callback(Request $request, $provider)
    {
         try {
            $userSocial = Socialite::driver($provider)->stateless()->user();

        } 

        catch (Exception $e) {
            
            return redirect ('/');
        }
        if (!$request->has('code') || $request->has('denied')) {
            return redirect('/');
        }

        //$userSocial =   Socialite::driver($provider)->stateless()->user();
        $users       =   User::where(['email' => $userSocial->getEmail()])->first();
        if($users){
            Auth::login($users);
            return redirect('/home');
        }
        else
        {
        	$user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'image'         => $userSocial->getAvatar(),
                'provider_id'   => $userSocial->getId(),
                'provider'      => $provider,
            ]);
            Auth::login($user);
         	return redirect()->route('home');
        }
    }
}
