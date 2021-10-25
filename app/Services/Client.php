<?php

namespace App\Services;


use App\Repository\BlogRepositoryInterface;
use App\Repository\ClientRepositoryInterface;
use App\Services\Utils\Image;

class Client
{

    protected $clientRepositoryInterface;
    protected $image;


    public function __construct(ClientRepositoryInterface $clientRepositoryInterface,Image $image){
        $this->clientRepositoryInterface=$clientRepositoryInterface;
        $this->image=$image;
    }

    private function getAllParams($request){
        $params=[
            'name'=>$request->name,
        ];
        if($request->cover!=""){
            $params=$this->image->upload($params ,$request,'uploads/client/','cover');
        }

        return $params;
    }

    public function create($request){
        $params=$this->getAllParams($request);
        $response=$this->clientRepositoryInterface->create($params);
        return $response;
    }

    public function all(){
        return $this->clientRepositoryInterface->all();
    }

    public function update($id,$request){
        $params=$this->getAllParams($request);
        $response=$this->clientRepositoryInterface->update($id,$params);
        return $response;
    }

    public function findById($id){
        return $this->clientRepositoryInterface->findById($id);
    }

    public function deleteById($id){
        return $this->clientRepositoryInterface->deleteById($id);
    }

}
