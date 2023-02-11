<?php

namespace Smbpartner\Breg;

use Illuminate\Support\ServiceProvider;

class BregServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }

    public function register()
    {
        $this->app->singleton(Breg::class, function(){
            return new Breg();
        });
    }
}