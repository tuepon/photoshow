<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('text', 'components.form.text', ['name', 'value' => null, 'attributes'=> []]);
        Form::component('textarea', 'components.form.textarea', ['name', 'value' => null, 'attributes'=> []]);
        Form::component('submit', 'components.form.submit', ['name', 'value' => null, 'attributes'=> []]);
        Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes'=> []]);
        Form::component('file', 'components.form.file', ['name', 'value' => null, 'attributes'=> []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
