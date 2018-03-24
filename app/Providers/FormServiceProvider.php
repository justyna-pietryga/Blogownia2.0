<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('login', 'components.form.login', ['name', 'value' => null, 'attributes'=>[]]);
        Form::component('email_custom', 'components.form.email', ['name', 'value' => null, 'attributes'=>[]]);
        Form::component('psw', 'components.form.psw', ['name', 'attributes'=>[]]);
        Form::component('submit', 'components.form.submit', ['value' => 'submit', 'attributes'=>[]]);
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
