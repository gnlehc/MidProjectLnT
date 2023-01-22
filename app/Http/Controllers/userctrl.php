<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userctrl extends Controller
{
    public function user(){
        return view("user");
    }
}
