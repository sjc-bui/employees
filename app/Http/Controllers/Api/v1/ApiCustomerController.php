<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;

class ApiCustomerController extends CustomerController
{
    public function getCustomers(Request $request)
    {
        $data = $this->customers($request->input('limit'));

        return response()->json($data, 200);
    }

    public function show($id)
    {
        $customer = $this->customer($id);

        return response()->json($customer, 200);
    }
}
