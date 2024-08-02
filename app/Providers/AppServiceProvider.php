<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Routing\UrlGenerator;
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> d956bf2ade8dfaeb1b95b20db5445584a78fa5cc
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
<<<<<<< HEAD
    // ...

    public function boot(UrlGenerator $url)
    {
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
    }


=======
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
>>>>>>> d956bf2ade8dfaeb1b95b20db5445584a78fa5cc
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

<<<<<<< HEAD
=======
    /**
     * Register any application services.
     *
     * @return void
     */
>>>>>>> d956bf2ade8dfaeb1b95b20db5445584a78fa5cc
    public function register()
    {
        //
    }
<<<<<<< HEAD

=======
>>>>>>> d956bf2ade8dfaeb1b95b20db5445584a78fa5cc
}
