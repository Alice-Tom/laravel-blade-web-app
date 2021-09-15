<?php

namespace App\Repository\Eloquent;

use App\Models\Education;
use App\Repository\EducationRepositoryInterface;


class EducationRepository extends BaseRepository implements EducationRepositoryInterface
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
     public function __construct(Education $model){
         $this->model = $model;
     }
}