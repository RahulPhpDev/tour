<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{
    Category,
    Package,
    Social,
    Visitor
};
use Carbon\Carbon;
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
        $dt = Carbon::now();
        $this->app_packages = null;
        $this->app_categories= null;
        $this->app_social= null;
        $totalVisitor = $dt->dayOfYear + $dt->year + $dt->month + $dt->hour +$dt->dayOfYear +$dt->weekOfYear +$dt->daysInMonth;
       
       
            $this->app_categories =  Category::query()->whereHas('package')->get();
            $this->app_packages =  Package::whereIn('completed_step', [4,5])->get();
            $this->app_social =  Social::firstOr(function () {
                return new Social;
            });
         $this->visitor =    Visitor::first();
       view()->composer('frontend.layout.app', function ($view) use (  $totalVisitor) {
             $view->with([
                'app_packages' => $this->app_packages ,
                'app_categories' => $this->app_categories,
                'app_social' => $this->app_social,
                'total_visitor' => $totalVisitor +  $this->visitor->number
              ]);
       });
   
    }
}
