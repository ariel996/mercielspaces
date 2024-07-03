<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\OpeningHour;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $company = Company::query()->first();
        view()->share('company', $company);

        $openingHours = OpeningHour::query()->get();
        view()->share('openingHours', $openingHours);

        $services = Service::query()->get();
        view()->share('services', $services);
    }
}
