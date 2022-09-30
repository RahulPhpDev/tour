<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{
    Category,
    Package,
    Social
};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('RoutesEnum', function () {
            $routeEnum = app(\App\Enums\RoutesEnum::class);
            return $routeEnum->routes();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            $this->app_categories =  Category::query()->whereHas('package')->get();
            $this->app_packages =  Package::whereIn('completed_step', [4,5])->get();
            $this->app_social =  Social::firstOr(function () {
                return new Social;
            });
            // dd($this->app_social  ); 
       view()->composer('frontend.layout.app', function ($view) {
             $view->with([
                'app_packages' => $this->app_packages ,
                'app_categories' => $this->app_categories,
                'app_social' => $this->app_social
              ]);
       });
   
    }
}
