<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         //
        Schema::defaultStringLength(191);
          View::composer('*', function($view)
     {
         if (Auth::check()){
        $provience_id=auth()->user()->provience_id;
        $district_id=auth()->user()->district_id;
        $local_state_id=auth()->user()->local_state_id;

          $local_state=DB::select("SELECT * from local_state where local_state_id=$local_state_id");
    
          $district=DB::select("SELECT * from district where district_id=$district_id");

          $provience=DB::select("SELECT * from province where province_id=$provience_id");
          $provience1=DB::select("SELECT * from province");

          View::share([
            'local_state'=>$local_state,
            'district'=>$district,
            'provience'=>$provience,
            'provience1'=>$provience1,
    
          ]);
    }else{
        
    }
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
