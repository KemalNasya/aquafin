<?php

namespace App\Providers;

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
    public function boot(): void
    {
        $logoPath = public_path('assets/logo_PMGAP.png');
        
        if (file_exists($logoPath)) {
            config([
                'filament.brand' => 'Pereng Mina GAP',
                'filament.brand_logo' => asset('assets/logo_PMGAP.png'),
            ]);
        }
    }
    
}
