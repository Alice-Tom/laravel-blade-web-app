<?php

namespace App\Services;

use App\Models\User;
use App\Repository\EducationRepositoryInterface as EducationInterface;
use auth;

class Education
{
    protected $educationInterface;


    public function __construct(EducationInterface $educationInterface)
    {
        $this->educationInterface = $educationInterface;
    }

    public function create($request)
    {
        $params = [
            'course_title' => $request->title,
            'institution' => $request->institution,
            'qualification' => $request->qualification,
            'country' => $request->country,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'user_id' => auth::id()
        ];
        return $this->educationInterface->create($params);
    }

    public function all()
    {
        return $this->educationInterface->all();
    }

    private function hasDegreeOrMore($ed)
    {
        foreach ($ed as $e) {
            if ($e->qualification == 'Degree' || $e->qualification == 'Post Graduate Degree' || $e->qualification == 'Masters' || $e->qualification == 'Doctorate (Phd)' || $e->qualification == 'Professorship') {

                return true;
            } else {
                return false;
            }
        }
    }

    public function getTechnicalExperts()
    {

        $expert = User::where('account_type', 'expert')
            ->where('feature', "1")->get();

        $technical = [];

        foreach ($expert as $ex) {
            $ed = $ex->education()->get();

            if ($this->hasDegreeOrMore($ed)) {
            } else {
                array_push($technical, $ex);
            }
        }
        return collect($technical);
    }


}
