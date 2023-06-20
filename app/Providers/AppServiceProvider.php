<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Usertype;
use Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        Gate::define('admin', function (User $user) {
            return $user->type_id == Usertype::ADMIN || $user->type_id == Usertype::GERENTE;
        });

        Gate::define('normal', function (User $user) {
            return $user->type_id == Usertype::NORMAL;
        });
    }
}
