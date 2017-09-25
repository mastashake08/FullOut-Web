<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\School' => 'App\Policies\SchoolPolicy',
        'App\Clinic' => 'App\Policies\ClinicPolicy',
        'App\Tryout' => 'App\Policies\TryoutPolicy',
        'App\Video' =>  'App\Policies\VideoPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();
        //
    }
}
