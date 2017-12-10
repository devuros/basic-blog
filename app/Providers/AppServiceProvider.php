<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Post;

use App\Tag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        // Place where you can perform any action or logic
        // with the assumption that the framework is complety loaded

        // register a composer where the first argument is the name of the
        // view that is loaded

        view()->composer('layouts.sidebar', function($view)
        {
            $archives = Post::archives();

            $tags = Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {

        /*  We use this method to register your things into the service container

            $this->app->singleton('App\Billing\Stripe', function () {
    
                return new \App\Billing\Stripe(config('services.stripe.secret'));

            });

        */

    }
}
