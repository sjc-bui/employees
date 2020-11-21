<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $data = Order::paginate(20);

        return view('order', ['data' => $data]);
    }
}
