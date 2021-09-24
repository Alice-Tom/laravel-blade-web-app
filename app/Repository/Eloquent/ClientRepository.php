<?php

namespace App\Repository\Eloquent;

use App\Models\Clients;

class ClientRepository extends BaseRepository implements \App\Repository\ClientRepositoryInterface
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
    public function __construct(Clients $model){
        $this->model = $model;
    }
}
