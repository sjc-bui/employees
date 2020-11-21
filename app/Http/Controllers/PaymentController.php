<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $data = DB::table('payments')
            ->join('customers', 'payments.customerNumber', '=', 'customers.customerNumber')
            ->paginate(20);

        return view('payment', ['data' => $data]);
    }
}
