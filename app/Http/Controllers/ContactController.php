<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(int $id)
    {
        return view('protfolio.contact');
    }
}
