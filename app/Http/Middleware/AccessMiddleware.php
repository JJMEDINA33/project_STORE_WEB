<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Models\UserProfile;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {

        $userId = auth()->id();

        $userProfile = UserProfile::where('user_id', '=', $userId)->first();

        if($userProfile->profile_id == User::ADMINISTRATOR){
            return $next($request);
        }
        session()->flash('message-warning', 'No tienes permiso para esta funcionalidad. Contacta al administrador.');
        return redirect('home');
    }
}
