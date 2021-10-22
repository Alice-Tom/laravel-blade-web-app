<?php

namespace App\Services;
use App\Repository\ProfileRepositoryInterface;
use auth;
use App\Services\Utils\Image;

class Profile
{
    protected $profileInterface;
    protected $image;


    public function __construct(ProfileRepositoryInterface $profileInterface,Image $image)
    {
        $this->profileInterface = $profileInterface;
        $this->image=$image;
    }

    public function create($request){
        return $this->profileInterface->create($request);
    }

    public function update($request){
        $params = [];
        if($request->avator!=''){

            $params=$this->image->upload($params ,$request,'uploads/avator/','avator');


        }
            $params['firstname'] = $request->firstname;
            $params['lastname'] = $request->lastname;
            $params["about"]=$request->about;

        return $this->profileInterface->update(auth::id(),$params);
    }

    public function findById(    int $modelId,
                                 array $columns = ['*'],
                                 array $relations = [],
                                 array $appends = []
    ){
        return $this->profileInterface->findById($modelId,$columns,$relations,$appends);
    }

    public function all(){
        return $this->profileInterface->all();
    }



    public function updateFeature($userId,$value){
        $param['feature'] = $value;
        return $this->profileInterface->update($userId,$param);
    }

    public function updateShortDescription($request){
        $expertId =$request->expert_id;
        $param["short_description"]=$request->short_description;
        $param["experience_years"]=$request->experience_years;
        return $this->profileInterface->update($expertId,$param);
    }

}
