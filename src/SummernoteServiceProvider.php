<?php

namespace Emotality\Nova;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class SummernoteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../fonts/vendor' => public_path('fonts/vendor'),
        ], 'public');

        Nova::serving(function (ServingNova $event) {
            Nova::script('summernote-nova', __DIR__ . '/../dist/js/field.js');
            Nova::style('summernote-nova', __DIR__ . '/../dist/css/field.css');
        });
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        //
    }
}
