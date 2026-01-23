<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Contracts\Cache\Repository as CacheRepository;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            return;
        }

        /** @var CacheRepository $cache */
        $cache = $this->app->make(CacheRepository::class);

        $defaults = config('theme', []);

        $settings = $cache->rememberForever('theme_settings', function () {
            return Setting::pluck('value', 'key')->toArray();
        });

        config([
            'theme' => array_merge($defaults, $settings),
        ]);
    }
}
