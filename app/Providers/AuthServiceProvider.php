<?php

namespace App\Providers;

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

        //хэрэглэгч Admin мөн эсэхийг шалгах
        Gate::define('admin-access', function ($user) {
            foreach ($user->roles as $role) {
                if ($role->name == 'admin') {
                    return true;
                }
            }
            return false;
        });
        
        //хэрэглэгч Author мөн эсэхийг шалгах
        Gate::define('author-access', function ($user) {
            foreach ($user->roles as $role) {
                if ($role->name == 'author') {
                    return true;
                }
            }
            return false;
        });
    }
}
