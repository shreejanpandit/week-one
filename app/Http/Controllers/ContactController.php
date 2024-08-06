<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('protfolio.contact');
    }

    public function store(int $id){
        //
    }
}
