<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapSuperAdminRoutes();
        $this->mapConsultantRoutes();
        $this->mapUniversityRoutes();
        $this->mapClientRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
            // ->namespace($this->namespace . '\User')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }


    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
    protected function mapSuperAdminRoutes()
    {
        Route::prefix('')
            ->middleware('web')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin.php'));
    }
    protected function mapConsultantRoutes()
    {
        Route::prefix('consultant')
             ->middleware('web')
            ->namespace('App\Http\Controllers\Consultant')
            ->group(base_path('routes/consultant.php'));
    }
    protected function mapUniversityRoutes()
    {
        Route::prefix('university')
            ->middleware('web')
            ->namespace('App\Http\Controllers\University')
            ->group(base_path('routes/university.php'));
    }
    protected function mapClientRoutes()
    {
        Route::prefix('client')
            ->middleware('web')
            ->namespace('App\Http\Controllers\Client')
            ->group(base_path('routes/client.php'));
    }
}
