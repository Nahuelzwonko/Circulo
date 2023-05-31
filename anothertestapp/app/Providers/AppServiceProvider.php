<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Mail\Markdown;
use Illuminate\Mail\MailServiceProvider;
use Illuminate\Mail\MarkdownServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...

        $this->app->singleton(Markdown::class, function ($app) {
            return new Markdown($app->make('markdown.renderer'), $app->make('markdown.theme'));
        });

        // ...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}