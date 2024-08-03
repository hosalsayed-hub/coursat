<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{public function boot(UrlGenerator $url)
    {
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
    }
   /**
     * Bootstrap any application services.
     *
     * @return void
     */


    /**
     * Register any application services.
     *
     * @return void
     */
 function register()
    {
        //
    }

}
