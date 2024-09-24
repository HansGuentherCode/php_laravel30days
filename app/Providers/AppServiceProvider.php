<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use \App\Models\User;
use \App\Models\Job;

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
        Model::preventLazyLoading();
		//Paginator::useBootstrapFive();
		
	/*
		Gate::define('edit-job', function(User $user, Job $job) {
			return ($job->employer->user->is(Auth::user()));
		});
	*/
    }
}
