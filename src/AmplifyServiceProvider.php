<?php

namespace Ammezie\Amplify;

use Illuminate\Support\ServiceProvider;

class AmplifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $dist = __DIR__.'/../config/amplify.php';
        $this->publishes([
            $dist => config_path('amplify.php'),
        ]);
        $this->mergeConfigFrom($dist, 'amplify');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
