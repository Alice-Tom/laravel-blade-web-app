<?php

namespace App\Repository\Eloquent;

use App\Models\User;
// use BaseRepository;
use App\Repository\ProfileRepositoryInterface;



class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
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
     public function __construct(User $model){
         $this->model = $model;
     }
}