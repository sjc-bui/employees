<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index()
    {
        $data = Office::paginate(20);

        return view('office', ['data' => $data]);
    }
}
