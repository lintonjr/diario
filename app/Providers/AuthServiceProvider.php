<?php

namespace App\Providers;

use App\Models\Administrative\Permission;
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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        foreach($this->listPermissions() as $permission)
        {
            Gate::define($permission->name, function($user) use($permission){
                return $user->existsThisRole($permission->roles) || $user->isAdmin();
            });
        }
    }

    public function listPermissions()
    {
        return Permission::with('roles')->get();
    }
}
