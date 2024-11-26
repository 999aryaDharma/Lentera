<?php

namespace App\Providers;

use App\Models\category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // Mengirimkan semua data kategori ke semua view
        $category = category::all();
        View::share('category', $category);
    }
}
