<?php

namespace App\Providers;

use App\Models\Komentar;
use App\Models\notif;
use Illuminate\Support\Facades\View;
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
        View::composer('layouts.main', function ($view) {
            $notif = notif::orderBy('created_at','DESC')->get();
            $view->with('notif', $notif);
        });
        View::composer('welcome', function ($view) {
            $komen = Komentar::orderBy('created_at','DESC')->get();
            $view->with('komen', $komen);
        });


    }
}
