<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

        // Share data to all views

        // Valid domain validation
        Validator::extend('valid_domain', function($attribute, $value, $parameters, $validator) {

            $parsedUrl = parse_url($value);

            if (isset($parsedUrl['host'])) {
                $host = $parsedUrl['host'];
            } else {
                $host = $parsedUrl['path'];
            }

            if (strpos($host, '.') === false) {
                return false;
            }

            return true;
        });

        // Valid url schema validation
        Validator::extend('valid_url_scheme', function($attribute, $value, $parameters, $validator) {

            $scheme = parse_url($value, PHP_URL_SCHEME);
            if (!isset($scheme) ||  $scheme === 'http' || $scheme === 'https') {
                return true;
            }

            return false;
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
