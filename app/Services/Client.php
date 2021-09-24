<?php

namespace App\Services;


use App\Repository\BlogRepositoryInterface;
use App\Repository\ClientRepositoryInterface;

class Client
{

    protected $clientRepositoryInterface;


    public function __construct(ClientRepositoryInterface $clientRepositoryInterface){
        $this->clientRepositoryInterface=$clientRepositoryInterface;
    }

    private function getAllParams($request){
        $params=[
            'name'=>$request->name,

        ];
        if($request->cover!=""){
            $destinationPath=public_path('uploads/client/');
            $cover='client'.$request->title."-".time().'.'.request()->cover->getClientOriginalExtension();
            $request->cover->move($destinationPath,$cover);
            $params["cover"]='uploads/client/'.$cover;
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
