<?php

namespace App\Repository\Eloquent;

use App\Models\SubService;
use App\Repository\SubServiceRepositoryInterface;


class SubServiceRepository extends BaseRepository implements SubServiceRepositoryInterface
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
     public function __construct(SubService $model){
         $this->model = $model;
     }
}