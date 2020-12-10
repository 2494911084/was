<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Observers\SiteMenuObserver;
use App\Observers\ArtObserver;
use App\Models\SiteMenu;
use App\Models\Art;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        SiteMenu::observe(SiteMenuObserver::class);
        Art::observe(ArtObserver::class);
    }
}
