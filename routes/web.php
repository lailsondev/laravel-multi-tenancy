<?php

use App\Models\Post;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            User::all();

            return view('welcome');
        })->name('home');
    });
}
