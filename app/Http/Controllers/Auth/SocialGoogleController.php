<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;

use App\User;

class SocialGoogleController extends Controller
{
    // this method redirect user to OAUTH for authentication
    public function redirectToProvider()
    {
        return Socialite::driver('google')
                ->scopes(['email', 'profile'])
                ->redirect();
    }

    // here we check if such user exists
    // if so we just log in,
    // in another case we register a new user
    public function handleProviderCallback()
    {
        try
        {
            // get user data from Google
            $user = Socialite::driver('google')->user();

            // we look for a user with such data
            $existingUser = User::where('provider_id', $user->getId())->first();

            if ($existingUser)  // if this user exists
            {
                Auth::login($existingUser);
            }
            else    // we register a new user
            {
                $newUser = new User();

                $newUser->email = $user->getEmail();
                $newUser->provider_id = $user->getId();

                // when you login with Google you need to pay attention to that
                // getNickname() method return NULL, then you shall use getName() method to get name of a user
                $newUser->handle_social = $user->getName();
                $newUser->name = $user->getName();
                $newUser->password = bcrypt(uniqid());

                $newUser->save();

                // after saving user data to the database,
                // we automatically log in this user
                Auth::login($newUser);
            }

            flash('Successfully authenticated using Google');

            return redirect('/');
        }
        catch(Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
