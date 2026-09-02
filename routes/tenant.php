<?php

declare(strict_types=1);

use App\Http\Controllers\Tenants\TenantDashboardController;
use App\Http\Controllers\Tenants\TenantHomeController;
use App\Http\Controllers\Tenants\TenantRegisterController;
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
    Route::get('/', [TenantRegisterController::class, 'index'])
        ->withoutMiddleware(TenantCanAccess::class)
        ->name('tenants.home');

    Route::post('/register', [TenantRegisterController::class, 'store'])
        ->withoutMiddleware(TenantCanAccess::class)
        ->name('tenants.register');
});


InitializeTenancyByDomain::$onFail = function ($exception, $request, $next) {
    dd('error');
};

InitializeTenancyBySubdomain::$onFail = function ($exception, $request, $next) {
    dd('error');
};
