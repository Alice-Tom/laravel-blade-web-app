<?php

namespace App\Services;
use App\Repository\EducationRepositoryInterface as EducationInterface;
use auth;

class Education
{
    protected $educationInterface;

    public function __construct(EducationInterface $educationInterface)
    {
        $this->educationInterface = $educationInterface;
    }

    public function create($request){
        $params =[
            'course_title'=>$request->title,
            'institution'=>$request->institution,
            'qualification'=>$request->qualification,
            'country'=>$request->country,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'user_id'=>auth::id()
        ];
        return $this->educationInterface->create($params);
    }


}
