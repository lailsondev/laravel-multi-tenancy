<?php

use App\Models\Post;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tenant = Tenant::find('empresa1');


    tenancy()->initialize($tenant);

    \App\Models\Comment::all();
    return view('welcome');
});
