<?php

namespace App\Repository\Eloquent;

use App\Models\Service;
use App\Repository\ServiceRepositoryInterface;


class ServiceRepository extends BaseRepository implements ServiceRepositoryInterface
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
     public function __construct(Service $model){
         $this->model = $model;
     }
}