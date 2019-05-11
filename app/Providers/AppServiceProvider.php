<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Schema;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);


 View::composer('frontend.includes.portfilio',function($view){
$products = DB::table('products')
        ->select('products.*','categories.categoryName')
        ->join('categories','products.category_id','categories.id')
        ->where('products.status',1)
        ->get();
$view->with(['products'=>$products]);
        });

 View::composer('frontend.includes.testimonial',function($view){
$reviews = DB::table('products')
        ->select('products.*','categories.categoryName','reviews.comment','reviews.user_name')
        ->join('categories','products.category_id','categories.id')
        ->join('reviews','products.id','reviews.product_id')
        ->where('products.status',1)
        ->orderby('products.created_at','desc')
        ->take(4)
        ->get();
$view->with(['reviews'=>$reviews]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
