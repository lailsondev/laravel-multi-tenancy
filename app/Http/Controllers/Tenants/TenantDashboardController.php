<?php

namespace App\Http\Controllers\Tenants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenantDashboardController extends Controller
{
    public function index()
    {
        dd('dashboard');
        return view('welcome');
    }
}
