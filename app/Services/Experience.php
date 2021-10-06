<?php

namespace App\Services;
use App\Repository\ExperienceRepositoryInterface as ExperienceInterface;
use auth;
use App\Services\Utils\Image;

class Experience
{
    protected $experienceInterface;
    protected $image;

    public function __construct(ExperienceInterface $experienceInterface,Image $image)
    {
        $this->experienceInterface = $experienceInterface;
        $this->image=$image;
    }

    public function create($request){
        $params =[
            'job_title'=>$request->title,
            'company'=>$request->organization,
            'position_level'=>$request->level,
            'country'=>$request->country,
            'start_date'=>$request->start_date,
            'user_id'=>auth::id()
        ];
        $params['end_date'] = isset($request->end_date) ? $request->end_date: "currently";

        if($request->attachment!=''){
            // $destinationPath = public_path('uploads/attachments/'); 
            // $attach = "exp-attach-".auth::id()."-".time().'.'.request()->attachment->getClientOriginalExtension();
            // $request->attachment->move($destinationPath, $attach);
            // $params['attachment'] = 'uploads/attachments/'.$attach;

            $params=$this->image->upload($params ,$request,'uploads/attachments/','attachment');

        }
        return $this->experienceInterface->create($params);
    }

}