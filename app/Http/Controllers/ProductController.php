<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::paginate(20);

        return view('product', ['data' => $data]);
    }
}
