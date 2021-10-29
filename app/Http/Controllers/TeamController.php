<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Services\Utils\Image;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    protected $image;
    private $team;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    private function getAllParams($request)
    {
        $params = [
            'name' => $request->name,
            'position' => $request->position,
            'link' => $request->link,
        ];
        if ($request->avator != "") {
            $params = $this->image->upload($params, $request, 'uploads/team/', 'avator');
        }
        return $params;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $team=Team::all();

        return view('dashboard.admin.team.all-team',[
            'team'=>$team
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


        return view('dashboard.admin.team.add-team');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $params = $this->getAllParams($request);

        $team = new Team;
        $team->avator = $params["avator"];
        $team->name = $params["name"];
        $team->link = $params["link"];
        $team->position = $params["position"];

        $team->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t = Team::where('id',$id)->delete();
        return redirect()->back();
    }
}
