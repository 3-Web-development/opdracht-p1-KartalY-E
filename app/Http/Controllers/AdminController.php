<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
            

    }
    public function getlogin()
    {
        return view("scan");
    }
}
