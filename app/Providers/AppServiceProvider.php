<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {
        View::composer('layouts.app', function ($view) {
            $menuItems = [
                ['name' => 'Home', 'url' => '/', 'children' => []],
                ['name' => 'About Us', 'url' => '/about', 'children' => []],
                ['name' => 'Services', 'url' => '/services', 'children' => []],
                ['name' => 'Portfolio', 'url' => '#', 'children' => [
                    ['name' => 'Portfolio List', 'url' => '/portfolio-1'],
                    ['name' => 'Single Project 1', 'url' => '/single-project'],
                    ['name' => 'Single Project 2', 'url' => '/single-project-2'],
                ]],
                ['name' => 'Blog', 'url' => '#', 'children' => [
                    ['name' => 'Posts List', 'url' => '/blog-1'],
                    ['name' => 'Single Post', 'url' => '/single-post'],
                ]],
                ['name' => 'Contact Us', 'url' => '/contact', 'children' => []],
            ];
    
            $view->with('menuItems', $menuItems);
        });
    }
    
}
