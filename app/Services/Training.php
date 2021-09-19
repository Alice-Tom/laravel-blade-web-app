<?php

namespace App\Services;
use App\Repository\TrainingRepositoryInterface;

class Training
{

    protected $trainingInterface;


    public function __construct(TrainingRepositoryInterface $trainingInterface){
        $this->trainingInterface=$trainingInterface;
    }

    private function getAllParams($request){
        $params=[
            'title'=>$request->title,
            'description'=>$request->description,
            'venue'=>$request->venue,
            'start_day'=>$request->start_day,
            'start_time'=>$request->start_time,
            'end_day'=>$request->end_day,
            'end_time'=>$request->end_time,
            'trainer'=>$request->trainer,
    
        ];
        if($request->cover!=""){
            $destinationPath=public_path('uploads/training/');
            $cover='training'.$request->title."-".time().'.'.request()->cover->getClientOriginalExtension();
            $request->cover->move($destinationPath,$cover);
            $params["cover"]='uploads/training/'.$cover;
        }

        return $params;
    }

    public function create($request){
        $params=$this->getAllParams($request);
        $response=$this->trainingInterface->create($params);
        return $response;
    }

    public function all(){ 
        return $this->trainingInterface->all();
    }

    public function update($id,$request){
        $params=$this->getAllParams($request);
        $response=$this->trainingInterface->update($id,$params);
        return $response;
    }

    public function findById($id){
        return $this->trainingInterface->findById($id);
    }

    public function deleteById($id){
        return $this->trainingInterface->deleteById($id);
    }

}