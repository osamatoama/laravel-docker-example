<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;

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
        // temp only for docker
        session()->put('migrate', 'yes');
        if (!session()->has('migrate') || User::count() == 0) {
            echo str_random();
            \Artisan::call('migrate:fresh --seed');
            return;
        }
    }
}
