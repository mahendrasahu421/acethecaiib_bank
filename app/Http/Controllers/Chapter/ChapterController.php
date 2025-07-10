<?php

namespace App\Http\Controllers\Chapter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
  public function index()
    {

        return view('admin.chapter.index');
    }
    public function show()
    {

        return view('admin.chapter.list');
    }
}
