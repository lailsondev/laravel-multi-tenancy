<?php

declare(strict_types=1);

use App\Http\Middleware\TenantCanAccess;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
Use Stancl\Tenancy\Middleware;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/


Route::middleware([
    'web',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
    TenantCanAccess::class
])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })
        ->withoutMiddleware(TenantCanAccess::class)
        ->name('tenant.home');

    Route::get('/dashboard', function () {
        User::all();

        return view('welcome');
    });
});


InitializeTenancyByDomain::$onFail = function ($exception, $request, $next) {
    dd('error');
};

InitializeTenancyBySubdomain::$onFail = function ($exception, $request, $next) {
    dd('error');
};
