<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        return view('news')
                        -> with('name' , '')
                        -> with('link' , '');
    }

    public function newsParam($param) {
        return view('product')
                        -> with('name' , '$param')
                        -> with('link' , '$param');
    }
}
