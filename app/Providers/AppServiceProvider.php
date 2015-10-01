<?php

namespace ProjectLumen\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $nome = "";
        $request = new Request;
        if($request->input('search')) {
            $nome = $request->input('search');
        }
        view()->share(['nome' => $nome]);
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
