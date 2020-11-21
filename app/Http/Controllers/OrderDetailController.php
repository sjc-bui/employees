<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        $data = OrderDetail::paginate(20);

        return view('orderdetails', ['data' => $data]);
    }
}
