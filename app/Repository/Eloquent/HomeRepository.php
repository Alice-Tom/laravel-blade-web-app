<?php

namespace App\Repository\Eloquent;

use App\Models\Home;
use App\Repository\HomeRepositoryInterface;


class HomeRepository extends BaseRepository implements HomeRepositoryInterface
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
     public function __construct(Home $model){
         $this->model = $model;
     }
}