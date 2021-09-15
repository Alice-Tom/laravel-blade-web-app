<?php

namespace App\Services;
use App\Repository\SubServiceRepositoryInterface;
use App\Services\Utils\Image;
use auth;

class SubService
{
    protected $subServiceInterface;
    protected $image;

    public function __construct(SubServiceRepositoryInterface $subServiceInterface,Image $image)
    {
        $this->SubServiceInterface = $subServiceInterface;
        $this->image = $image;
    }

    public function create($request){
        $params = [];
        if( !isset($request->image) || empty($request->title) || 
            empty($request->top_title) || empty($request->top_description) ||
            empty($request->bottom_title) || empty($request->bottom_description) ||
            empty($request->service_id)  ){
            return false;
        }
        $params =  $this->image->upload($params,$request,'uploads/sub-services/','image');
        $params['title'] = $request->title;
        $params['top_title'] = $request->top_title;
        $params['top_description'] = $request->top_description;
        $params['bottom_title'] = $request->bottom_title;
        $params['service_id'] = $request->service_id;
        $params['bottom_description'] = $request->bottom_description;

        $this->SubServiceInterface->create($params);
        return true;
    }

    public function update($id,$request){
        if($this->SubServiceInterface->findById($id)){
            $params = [];
        if(!empty($request->image)  ){
            $params =  $this->image->upload($params,$request,'uploads/sub-services/','image');
         }

        $params['title'] = $request->title;
        $params['top_title'] = $request->top_title;
        $params['top_description'] = $request->top_description;
        $params['bottom_title'] = $request->bottom_title;
        $params['service_id'] = $request->service_id;
        $params['bottom_description'] = $request->bottom_description;
        return $this->SubServiceInterface->update($id,$params);

        }else{
            return false;
        }
    }

    public function findById($id){
        return $this->SubServiceInterface->findById($id);
    }

    public function all(){
        return $this->SubServiceInterface->all();
    }

    public function deleteById($id){
        return $this->SubServiceInterface->deleteById($id);
    }

}