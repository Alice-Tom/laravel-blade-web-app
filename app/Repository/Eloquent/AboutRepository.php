<?php

namespace App\Repository\Eloquent;

use App\Models\About;
use App\Repository\AboutRepositoryInterface;


class AboutRepository extends BaseRepository implements AboutRepositoryInterface
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
     public function __construct(About $model){
         $this->model = $model;
     }
}