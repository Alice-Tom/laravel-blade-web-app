<?php

namespace App\Http\Controllers;


use App\Http\Requests\TrainingRequest;
use App\Services\Blog;


class TrainingController extends Controller
{


    private $training;

    public function __construct(Blog $training){
    $this->training = $training;
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainings=$this->training->all();
        return view('dashboard.admin.training.all-trainings',[
            'trainings'=>$trainings
        ]);

    }

    public function indexPublic(){
        $trainings=$this->training->all();
        return view('pages.training',[
            'trainings'=>$trainings
        ]);

    }


    public function viewPublic($id){
        $training=$this->training->findById($id);
        return view('pages.view-training',[
            'training'=>$training
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.admin.training.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingRequest $request)
    {
        //
        $this->training->create($request);

        return $this->index();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $training=$this->training->findById($id);

         return view('dashboard.admin.training.edit-training',[
             'training'=>$training
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update($id, TrainingRequest $request)
    {
        //
        $isUpdated=$this->training->update($id,$request);

        return redirect('/all-training');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $isDeleted=$this->training->deleteById($id);

        return redirect('/all-training');

    }
}
