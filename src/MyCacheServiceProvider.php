<?php

namespace Yjtec\MC;

use Illuminate\Support\ServiceProvider;

class MyCacheServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**s
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('mycache', function ($app) {
            return new MyCache();
        });
    }
    /**
     * 获取提供器提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return ['mycache'];
    }
}
