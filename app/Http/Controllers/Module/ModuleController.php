<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {

        return view('admin.module.index');
    }
    public function show()
    {

        return view('admin.module.list');
    }
}
