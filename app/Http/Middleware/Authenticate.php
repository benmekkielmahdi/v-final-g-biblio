<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    { 
        switch(Auth::user()->role){
            case 1:
            $this->redirectTo = '/Oeuvre';
            return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/welcome';
                return $this->redirectTo;
        }
         
       
    }
}
