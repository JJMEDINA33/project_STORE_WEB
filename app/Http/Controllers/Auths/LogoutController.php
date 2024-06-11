<?php
namespace App\Http\Controllers\Auths;

use Illuminate\Support\Facades\Auth;

class LogoutController{

    public function __invoke()
    {
        Auth::logout();
       return redirect()->to('/login')
       ->with('mensage', 'Sesion Finalizada ');
    }

}