<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:dashboards.index',['only' => ['index']]);
    }
    

    public function index()
    {
        return view('admin.dashboard.index');
    }
}
