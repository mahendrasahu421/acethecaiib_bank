<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function commingSonn()
    {
        return view('welcome');
    }
}
