<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Product() {
        return view('product')
                        -> with('name' , 'Product');
    }

    public function Books() {
        return view('product')
                        -> with('name' , 'Books');
    }
}
