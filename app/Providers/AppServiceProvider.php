<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
       $this->checkAccount();
    }
    private function checkAccount(){

        // View()->composer('backend::*', function(\illuminate\Contracts\View\View $view){
        //     //admin
        //     $view->with('authAdmin', Auth::guard('admin')->user() );
        //     // customers
        //     $view->with('authCustomers', Auth::guard('web')->user() );
        // });
    }
}
