<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderDetailController extends Controller
{
    public function index()
    {
        $data = DB::table('orderdetails')
            ->join('products', 'orderdetails.productCode', '=', 'products.productCode')
            ->paginate(10);

        return view('orderdetails', ['data' => $data]);
    }
}
