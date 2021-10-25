<?php

namespace App\Services;
use App\Repository\AboutRepositoryInterface;
use App\Services\Utils\Image;
use auth;

class About
{
    protected $aboutInterface;
    protected $image;

    public function __construct(AboutRepositoryInterface $aboutInterface,Image $image)
    {
        $this->aboutInterface = $aboutInterface;
        $this->image = $image;
    }

    public function all(){
        $aboutdata = $this->aboutInterface->all();
        if($aboutdata){
            return $aboutdata->first();
        }
        return $aboutdata;
    }

    public function createOrUpdate($request,$id=null){
        $request["intro_link"] =str_replace("width=\"560\" height=\"315\"","width=\"860\" height=\"500\"", $request["intro_link"]);   //formatting size of video for display
        $arrayRequest = $request->all();

        if(!empty($request['intro_image'])){
            $arrayRequest =  $this->image->upload($arrayRequest ,$request,'uploads/About/','intro_image');
        }

        if(empty($request['about_id'])){
          return  $this->aboutInterface->create($arrayRequest);
        }else{
            $about = $this->aboutInterface->findById($request->about_id);
            if($about){
                return $this->aboutInterface->update($about->id,$arrayRequest);
            }else{
                return false;
            }
        }
        return $request->all();
    }
}
