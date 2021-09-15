<?php

namespace App\Services;

use App\Notifications\NewJob;
use App\Repository\JobRepositoryInterface as JobInterface;
use App\Repository\ProfileRepositoryInterface as UserInterface;
use auth;

class Job
{
    protected $jobInterface;
    protected $userInterface;

    public function __construct(JobInterface $jobInterface,UserInterface $userInterface)
    {
        $this->jobInterface = $jobInterface;
        $this->userInterface = $userInterface;
    }


    public function create($request){
        $params =[
            'title'=>$request->title,
            'type'=>$request->type,
            'category'=>$request->category,
            'location'=>$request->location,
            'min_salary'=>$request->min_salary,
            'max_salary'=>$request->max_salary,
            'description'=>$request->description,
            'dead_line'=>$request->dead_line,
            'user_id'=>auth::id()
        ];

        if($request->attachment!=''){
            $destinationPath = public_path('uploads/jobs/'); 
            $job = "job-".$request->firstname."-".time().'.'.request()->attachment->getClientOriginalExtension();
            $request->attachment->move($destinationPath, $job);
            $params['attachment'] = 'uploads/jobs/'.$job;
        }
        //save or update condition
        $response = !empty($request->job_id) ? $this->jobInterface->update($request->job_id,$params) : $this->jobInterface->create($params);

        if(empty($request->job_id)){
            $admins = $this->userInterface->all()->where('account_type','admin');
            foreach($admins as $admin){
                $admin->notify(new NewJob($response));
            }
        }
        return $response;
    }

    public function all(){
        return $this->jobInterface->all();
    }


    public function findById($id){
        return $this->jobInterface->findById($id);
    }

    public function deleteById($id){
        return $this->jobInterface->deleteById($id);
    }


}