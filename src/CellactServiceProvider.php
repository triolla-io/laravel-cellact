<?php

namespace Yna\Cellact;

use Illuminate\Support\ServiceProvider;
use Yna\Cellact\Api\Api;

class CellactServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Api::class, function () {
            return Api::create(config('services.cellact'));
        });
    }
}
