<?php

namespace App\Http\Controllers\Discount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        return view('admin.discount.index');
    }
    public function show()
    {
        return view('admin.discount.list');
    }
}
