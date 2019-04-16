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
        //'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-post', function ($user, $post) {
        //     return $user->id == $post->user_id;
        // });
        Gate::resource('posts', 'App\Policies\PostPolicy');

        Gate::resource('users', 'App\Policies\UserPolicy');

        Gate::define('posts', 'App\Policies\PostPolicy@posts');
        Gate::define('tags', 'App\Policies\TagPolicy@tags');
        Gate::define('category', 'App\Policies\CategoryPolicy@category');
        Gate::define('permissions', 'App\Policies\PermissionPolicy@permissions');
        Gate::define('roles', 'App\Policies\RolePolicy@roles');
        Gate::define('users', 'App\Policies\UserPolicy@users');

        //Gate::define('category', 'App\Policies\PostPolicy@category');

    }
}
