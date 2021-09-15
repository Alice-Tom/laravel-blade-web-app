<?php

namespace App\Repository\Eloquent;

use App\Models\Job;
use App\Repository\JobRepositoryInterface;



class JobRepository extends BaseRepository implements JobRepositoryInterface
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
     public function __construct(Job $model){
         $this->model = $model;
     }
}