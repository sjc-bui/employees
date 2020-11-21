<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = DB::table('employees')
            ->join('offices', 'employees.officeCode', '=', 'offices.officeCode')
            ->select('employees.*', 'offices.city')
            ->paginate(20);

        return view('employee', ['data' => $data]);
    }
}
