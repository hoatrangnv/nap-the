<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = [
            'Phone\PhoneRepositoryInterface' => 'Phone\PhoneRepository',
            'PhoneTrue\PhoneTrueRepositoryInterface' => 'PhoneTrue\PhoneTrueRepository',
            'PayCard\PayCardRepositoryInterface' => 'PayCard\PayCardRepository',
            'User\UserRepositoryInterface' => 'User\UserRepository',
            'Email\EmailRepositoryInterface' => 'Email\EmailRepository',
            'ApiToken\ApiTokenRepositoryInterface' => 'ApiToken\ApiTokenRepository',
        ];
        foreach ($repositories as $key=>$val){
            $this->app->bind("App\\Repositories\\$key", "App\\Repositories\\$val");
        }
    }
}
