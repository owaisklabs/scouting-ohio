<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class UserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if (Auth::check()) {
        //     $expiresAt = now()->addMinutes(2); /* keep online for 2 min */
        //     $cahe = Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
        //     $users = Cache::get('user-is-online-' . Auth::user()->id);
        //     dd($users);

        //     /* last seen */
        //     // User::where('id', Auth::user()->id)->update(['last_seen' => now()]);
        // }
        // return $next($request);
        if(Auth::check()) {
            // Get the array of users from the cache
            $users = Cache::get('online-users');
            // If it's empty create it with the user who triggered this middleware call
            if(empty($users)) {
                Cache::put('online-users', [['id' => Auth::user()->id, 'last_activity_at' => now()]], now()->addMinutes(10));
            } else {
                // dd("here");
                // Otherwise iterate over the users stored in the cache array
                foreach ($users as $key => $user) {
                    // If the current iteration matches the logged in user, unset it because it's old
                    // and we want only the last user interaction to be stored (and we'll store it below)
                    if($user['id'] === Auth::user()->id) {
                        unset($users[$key]);
                        continue;
                    }
                    // If the user's last activity was more than 10 minutes ago remove it
                    if ($user['last_activity_at'] < now()->subMinutes(3)) {
                        unset($users[$key]);
                        continue;
                    }
                    // dd($user);
                }

                // Add this last activity to the cache array
                $users[] = ['id' => Auth::user()->id, 'last_activity_at' => now()];

                // Put this array in the cache
                Cache::put('online-users', $users, now()->addMinutes(3));
                // dd(Cache::get('online-users'));
            }
        }
        return $next($request);
    }
}
