<?php

namespace App\Http\Controllers;

use App\Models\Tenant;

class HomeController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();

        $tenants->each(function ($tenant) {
            $tenant->theme = 'dark';

            $tenant->save();
        });

        return view('welcome');
    }
}
