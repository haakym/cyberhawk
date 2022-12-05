<?php

namespace App\Providers;

use App\Models\Inspection;
use Illuminate\Support\ServiceProvider;
use App\CyberHawk\Services\InspectionService\InspectionService;
use App\CyberHawk\Services\InspectionService\InspectionServiceInterface;
use App\CyberHawk\Repositories\InspectionRepository\InspectionRepository;
use App\CyberHawk\Repositories\InspectionRepository\InspectionRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(InspectionRepositoryInterface::class, function ($app) {
            return new InspectionRepository(new Inspection);
        });
        
        $this->app->bind(InspectionServiceInterface::class, function ($app) {
            return new InspectionService(
                $app->make(InspectionRepositoryInterface::class)
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
