<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Services\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    protected $about;

    public function __construct(About $about)
    {
        $this->about = $about;
    }

    public function aboutPage()
    {
        $about = $this->about->all();

        $team=Team::all();

        return view('pages.about', [
            'about' => $about,
            'team'=>$team
        ]);
    }

    public function index()
    {
        $about = $this->about->all();
        return view('dashboard.admin.about.edit', [
            'about' => $about,

        ]);
    }

    public function createOrUpdate(Request $request)
    {
        $data = $this->about->createOrUpdate($request);
        return redirect()->to('/edit-about');
    }

}
