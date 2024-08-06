<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $personal_image = "storage/images/shree.jpg";
        $personal_details = ["name" => "Shreejan Pandit", "address" => "Pokhara-32", "personal_image" => $personal_image,"learn"=>"laravel"];
        return view('protfolio.home', ["my_details" => $personal_details]);
    }

    public function edit($name)
    {
        $personal_image = "storage/images/shree.jpg";
        $personal_details = ["name" => $name, "address" => "Pokhara-32", "personal_image" => $personal_image,"learn"=>"laravel"];
        return view('protfolio.home', ["my_details" => $personal_details]);
    }
    
}
