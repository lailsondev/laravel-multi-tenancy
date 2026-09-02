<?php

namespace App\Http\Controllers\Tenants;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TenantHomeController extends Controller
{
    public function index()
    {
        return view('tenants.register');
    }
}
