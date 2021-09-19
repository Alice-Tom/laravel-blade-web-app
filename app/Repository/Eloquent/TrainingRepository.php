<?php

namespace App\Repository\Eloquent;

use App\Models\Training;
use App\Repository\TrainingRepositoryInterface;


class TrainingRepository extends BaseRepository implements TrainingRepositoryInterface
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
     public function __construct(Training $model){
         $this->model = $model;
     }
}

