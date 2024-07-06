<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class KidsprogramController extends Controller
{
    public function Join()
    {
         return view('user.pages.join');
        
    }
}
