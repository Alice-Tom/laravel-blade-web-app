<?php

namespace App\Repository\Eloquent;

use App\Models\Experience;
use App\Repository\ExperienceRepositoryInterface;


class ExperienceRepository extends BaseRepository implements ExperienceRepositoryInterface
{
    /**
    * @var Model
    */
    protected $model;

    /**
     * BaseRepository constructor
     * 
     * @param Model $model
     */
     public function __construct(Experience $model){
         $this->model = $model;
     }
}