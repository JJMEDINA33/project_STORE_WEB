<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewStoreController extends Controller
{
    public function __invoke(){

        return view('store');
    }
}
