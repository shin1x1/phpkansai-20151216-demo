<?php

namespace App\Providers;

use App\Repository\Eloquent\BookRepository;
use Illuminate\Support\ServiceProvider;
use Shin1x1\Book\Domain\BookRepository as BookRepositoryInterface;

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
        $this->app->bind(BookRepositoryInterface::class, BookRepository::class);
    }
}
