<?php

namespace App\Providers;

use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\EducationRepository;
use App\Repository\EducationRepositoryInterface;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\ProfileRepositoryInterface;
use App\Repository\Eloquent\ProfileRepository;
use App\Repository\ExperienceRepositoryInterface;
use App\Repository\Eloquent\ExperienceRepository;
use App\Repository\JobRepositoryInterface;
use App\Repository\Eloquent\JobRepository;
use App\Repository\ServiceRepositoryInterface;
use App\Repository\Eloquent\ServiceRepository;
use App\Repository\SubServiceRepositoryInterface;
use App\Repository\Eloquent\SubServiceRepository;
use App\Repository\HomeRepositoryInterface;
use App\Repository\Eloquent\HomeRepository;
use App\Repository\AboutRepositoryInterface;
use App\Repository\Eloquent\AboutRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class,BaseRepository::class);
        $this->app->bind(EducationRepositoryInterface::class,EducationRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class,ProfileRepository::class);
        $this->app->bind(ExperienceRepositoryInterface::class,ExperienceRepository::class);
        $this->app->bind(JobRepositoryInterface::class,JobRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class,ServiceRepository::class);
        $this->app->bind(SubServiceRepositoryInterface::class,SubServiceRepository::class);
        $this->app->bind(HomeRepositoryInterface::class,HomeRepository::class);
        $this->app->bind(AboutRepositoryInterface::class,AboutRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
