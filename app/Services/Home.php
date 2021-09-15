<?php

namespace App\Services;
use App\Repository\HomeRepositoryInterface;
use App\Services\Utils\Image;
use auth;

class Home
{
    protected $homeInterface;
    protected $image;

    public function __construct(HomeRepositoryInterface $homeInterface,Image $image)
    {
        $this->homeInterface = $homeInterface;
        $this->image = $image;
    }

    public function all(){
        $homedata = $this->homeInterface->all();
        if($homedata){
            return $homedata->first();
        }
        return $homedata;
    }

    public function createOrUpdate($request,$id=null){
        $arrayRequest = $request->all();
        if(!empty($request['image1'])){
            $arrayRequest =  $this->image->upload($arrayRequest ,$request,'uploads/home/','image1');
        }
        if(!empty($request['image2'])){
            $arrayRequest =  $this->image->upload($arrayRequest ,$request,'uploads/home/','image2');
        }
        if(!empty($request['image3'])){
            $arrayRequest =  $this->image->upload($arrayRequest ,$request,'uploads/home/','image3');
        }
        if(!empty($request['intro_image'])){
            $arrayRequest =  $this->image->upload($arrayRequest ,$request,'uploads/home/','intro_image');
        }
        if(!empty($request['sec3_image'])){
            $arrayRequest =  $this->image->upload($arrayRequest ,$request,'uploads/home/','sec3_image');
        }
        if(!empty($request['sec4_image'])){
            $arrayRequest =  $this->image->upload($arrayRequest ,$request,'uploads/home/','sec4_image');
        }
        if(empty($request['home_id'])){
          return  $this->homeInterface->create($arrayRequest);
        }else{
            $home = $this->homeInterface->findById($request->home_id);
            if($home){
                return $this->homeInterface->update($home->id,$arrayRequest);
            }else{
                return false;
            }
        }
        return $request->all();
    }
}   