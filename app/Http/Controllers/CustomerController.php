<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function customers($per_page = null)
    {
        $data = DB::table('customers')
            ->leftJoin('employees', 'customers.salesRepEmployeeNumber', '=', 'employees.employeeNumber')
            ->paginate($per_page == null ? 20 : $per_page);

        return $data;
    }

    public function customer($id)
    {
        $cus = Customer::where('customerNumber', $id)->first();
        $customer = [];

        if ($cus != null) {
            $em = Employee::where('employeeNumber', $cus->salesRepEmployeeNumber)->first();

            $customer[] = [
                "customerNumber" => $cus->customerNumber,
                "customerName" => $cus->customerName,
                "contactName" => $cus->contactLastName . " " . $cus->contactFirstName,
                "phone" => $cus->phone,
                "city" => $cus->city,
                "state" => $cus->state,
                "postalCode" => $cus->postalCode,
                "country" => $cus->country,
                "employeeName" => empty($em) ? "" : $em->lastName . " " . $em->firstName,
                "creditLimit" => $cus->creditLimit
            ];
        }

        return $customer;
    }

    public function index(Request $request)
    {
        $data = $this->customers();

        return view('customer', [
            'data' => $data,
            'request' => $request
        ]);
    }
}
