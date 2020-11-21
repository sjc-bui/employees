<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $data = DB::table('customers')
            ->leftJoin('employees', 'customers.salesRepEmployeeNumber', '=', 'employees.employeeNumber')
            ->paginate(20);

        return view('customer', ['data' => $data]);
    }
}
