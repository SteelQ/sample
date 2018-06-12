<?php

namespace App\Providers;

use App\Models\Status;
use App\Models\User;
use App\Policies\StatusPolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
      'App\Model' => 'App\Policies\ModelPolicy',
      User::class => UserPolicy::class,
      Status::class => StatusPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
    }
}
