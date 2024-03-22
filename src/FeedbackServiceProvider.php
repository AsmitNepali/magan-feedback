<?php

namespace Magan\Feedback;

use Illuminate\Support\ServiceProvider;

class FeedbackServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot(): void
    {

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'feedback');

        // Publishing is only necessary when using the CLI.

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/feedback'),
        ], 'feedback-views');

        $this->publishes([
            __DIR__ . '/../config/feedback.php' => config_path('feedback.php'),
        ], 'feedback-config');

        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/feedback.php', 'feedback');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['feedback'];
    }

    /**
     * Console-specific booting.
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/feedback.php' => config_path('feedback.php'),
        ], 'feedback.config');
    }
}
