<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $data = Payment::paginate(20);

        return view('payment', ['data' => $data]);
    }
}
