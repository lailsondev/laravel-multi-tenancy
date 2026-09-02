<?php

namespace App\Http\Controllers\Tenants;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TenantRegisterController extends Controller
{
    public function index()
    {

        return view('tenants.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => tenant()->unique('users'),
            'password' => 'required|string',
        ]);

        User::create($data);

        return back();
    }
}
