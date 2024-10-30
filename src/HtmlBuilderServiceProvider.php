<?php

namespace Weblab\HtmlBuilder;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Weblab\HtmlBuilder\components\form;

class HtmlBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the package's services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources', 'weblab');
        Blade::componentNamespace('weblab::components', 'weblab');
    }
}
