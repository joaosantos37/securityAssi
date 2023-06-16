<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Validation\Rules\Password;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Password::defaults(function () {
            return Password::min(8) //Must be at least 8 characters long
            ->mixedCase() //Must have 1 upper and 1 lowercased letter
            ->numbers() //Must contain a number(s)
            ->uncompromised(); //Has not been found leaked on the internet
        });
    }
}
