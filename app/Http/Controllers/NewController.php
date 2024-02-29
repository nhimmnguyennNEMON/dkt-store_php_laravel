<?php

namespace App\Http\Controllers;

class NewController extends Controller
{
    public function listNews()
    {
        return view('user.news');
    }
}