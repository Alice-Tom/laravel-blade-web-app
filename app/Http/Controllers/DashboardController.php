<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Profile;
use App\Services\Education;
use App\Services\Experience;
use App\Services\Job;
use App\Http\Requests\ExperienceRequest;
use App\Http\Requests\JobRequest;
use App\Notifications\ActivatedJob;
use App\Notifications\NewJobExpert;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $profile;
    private $education;
    private $experience;
    private $job;

    public function __construct(Profile $profile,Education $education,Experience $experience,Job $job){
        $this->profile = $profile;
        $this->education = $education;
        $this->experience = $experience;
        $this->job = $job;
    }

    function setActive($path)
    {
        return Request::is($path . '*') ? ' class=active' :  '';
    }

    public function dashboard(){
        $notifications = auth::user()->notifications;
        switch(auth::user()->account_type){
            case 'expert':
                return view('dashboard.expert.dashboard-expert',[
                    'jobs'=>$this->job->all(),
                    'jobsCounter'=> $this->job->all()->count(),
                    'notifications'=>$notifications
                ]);
            break;

            case 'recruiter':
                return view('dashboard.recruiter.dashboard',[
                    'notifications'=>$notifications

                ]);
            break;

            case 'admin':
                $users = $this->profile->all();
                return view('dashboard.admin.dashboard',
                [
                    'jobsCounter'=> $this->job->all()->count(),
                    'employers' => $users->where('account_type','recruiter')->count(),
                    'experts'   =>$users->where('account_type','expert')->count(),
                    'notifications'=>$notifications

                ]
            );

            default:
                dd('404');

        }
        dd('404');
    }

    public function profile(){

        return view('dashboard.expert.cv-profile');
    }

    public function updateProfile(Request $request){

        $this->profile->update($request);
        return redirect()->back();
    }

    public function updateEducation(Request $request){
        $this->education->create($request);
        return redirect()->back();
    }

    public function updateExperience(ExperienceRequest $request){
        $exp = $this->experience->create($request);
        return redirect()->back();
    }

    public function addJob(JobRequest $request){
        $exp = $this->job->create($request);
        return redirect()->route('manage-jobs');
    }

    public function manageJob(){
        return view('dashboard.recruiter.manage-jobs');
    }

    public function jobsList(){
        $user = $this->profile->findById(auth::id());
        $userAccount = $user->account_type;
        if($userAccount == 'admin' || $userAccount == 'expert' ){
            $isAdmin = $userAccount == 'admin' ? true: false;
            return view('dashboard.expert.jobs',[
                'jobs'=>$this->job->all(),
                'isAdmin' => $isAdmin
            ]);
        }

        return redirect()->back();

    }

    public function viewJob($id){
        $job = $this->job->findById($id);
        $similar = $this->job->all()
        ->where('category',$job->category)
        ->where('id','!=',$job->id);



        return view('pages.view-job',[
            'job'=> $job,
            'similar'=>$similar
        ]);
    }

    public function showJob($id){
        $job = $this->job->findById($id);

        return view('dashboard.recruiter.edit-job',[
            'job'=>$job
        ]);
    }

    public function deleteJobById($id){
        $this->job->deleteById($id);
        return redirect()->back();
    }

    public function applyJob($id){
        $user = $this->profile->findById(auth::id());
        $job  = $this->job->findById($id);
        if($job->applicants->contains($user->id)){
            return redirect()->back();
        }
        $user->applications()->attach([$id]);
            return redirect()->back();
    }

    public function expertApplication(){
        $applications = auth::user()->applications;
        return view('dashboard.expert.my-applications',[
            'applications'=>$applications
        ]);
    }

    public function manageApplicants($id){
        $job  = $this->job->findById($id);
        return view('dashboard.recruiter.manage-applicants',[
            'job' => $job
        ]);
    }

    public function viewApplicant($id){
        $applicant = $this->profile->findById($id);

        $education=$applicant->education()->get();
        $experience=$applicant->experiences()->get();

        return view('dashboard.recruiter.view-applicant',[
            'applicant' => $applicant,
            'educations'=>$education,
            'experiences'=>$experience
        ]);
    }

    public function jobVisibility($id){
        $job  = $this->job->findById($id);
        if(!$job->active){
            foreach (auth::user()->unreadNotifications as $notification) {
                if($id == $notification->data['id']){
                    $notification->markAsRead();
                }
            }
            //notification to job creater and expert
            $job->user->notify(new ActivatedJob($job));
            $experts = $this->profile->all()->where('account_type','expert');
            foreach($experts as $expert){
                $expert->notify(new NewJobExpert($job));
            }
        }
        $job->active = !$job->active;

        $job->save();

        return redirect()->back();
    }

    public function showEmployer(){
        $employers = $this->profile->all()
                    ->where('account_type','recruiter')
                    ->sortBy('name');
        return view('dashboard.admin.employers',[
            'employers'=>$employers
        ]);
    }

    public function showExpert(){
        $experts = $this->profile->all()
                    ->where('account_type','expert')
                    ->sortBy('name');
        return view('dashboard.admin.experts',[
            'experts'=>$experts
        ]);
    }

    public function changeFeature(Request $request){
        $expert = $this->profile->findById($request->id);

        if(($expert->education==null)){
            return back()->with('error','This user doesnt have any education details');
        }

        if($expert->avator==null){
            return back()->with('error','This user doesnt upload passport picture');
        }

            $this->profile->updateFeature($expert->id,!$expert->feature);
            return back()->with('success','successfully added to featured');

    }

    public function markasRead($id=''){
        if($id !== ''){
            foreach (auth::user()->unreadNotifications as $notification) {
                if($notification->id === $id){
                    $notification->markAsRead();
                }
            }
        }else{
            auth::user()->unreadNotifications->markAsRead();
        }

        return redirect()->back();

    }
}
