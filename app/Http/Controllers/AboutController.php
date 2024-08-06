<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $git_link = ["git"=>"https://github.com/shreejanpandit/","gmail"=>"shreezanpandit@gmail.com"];
        return view('protfolio.about', ["link" => $git_link]);
    }
}
