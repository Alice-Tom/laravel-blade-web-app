<?php

namespace App\Services;


use App\Repository\BlogRepositoryInterface;
use App\Services\Utils\Image;

class Blog
{

    protected $blogInterface;
    protected $image;



    public function __construct(BlogRepositoryInterface $blogInterface,Image $image){
        $this->blogInterface=$blogInterface;
        $this->image=$image;
    }

    private function getAllParams($request){
        $params=[
            'title'=>$request->title,
            'description'=>$request->description,


        ];
        if($request->cover!=""){
           
            $params=$this->image->upload($params ,$request,'uploads/blog/','cover');
        }

        return $params;
    }

    public function create($request){
        $params=$this->getAllParams($request);
        $response=$this->blogInterface->create($params);
        return $response;
    }

    public function all(){
        return $this->blogInterface->all();
    }

    public function update($id,$request){
        $params=$this->getAllParams($request);
        $response=$this->blogInterface->update($id,$params);
        return $response;
    }

    public function findById($id){
        return $this->blogInterface->findById($id);
    }

    public function deleteById($id){
        return $this->blogInterface->deleteById($id);
    }

}
