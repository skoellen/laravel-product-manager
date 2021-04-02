<?php

namespace Skoellen\LaravelProductManager;

use Illuminate\Support\ServiceProvider;

class LaravelProductManagerServiceProvider extends ServiceProvider {

    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/create_categories_table.php.stub' =>
            database_path('migrations/' . date('Y_m_d_His', time()) . '_create_categories_table.php')
        ], 'migrations');
    }

}
