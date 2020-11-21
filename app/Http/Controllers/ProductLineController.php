<?php

namespace App\Http\Controllers;

use App\Models\ProductLine;
use Illuminate\Http\Request;

class ProductLineController extends Controller
{
    public function index()
    {
        $data = ProductLine::paginate(20);

        return view('productline', ['data' => $data]);
    }
}
