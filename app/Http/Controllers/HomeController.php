<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Blog;
use App\Services\Client;
use App\Services\Education;
use App\Services\Home;
use App\Services\Profile;
use App\Services\Service;
use App\Services\SubService;
use App\Services\Training;
use auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    protected $home;
    private $service;
    private $subService;
    private $user;
    private $client;
    private $training;
    private $blog;
    private $education;


    public function __construct(Home $home, Service $service, SubService $subService, Profile $profile, Client $client, Training $training, Blog $blog,Education $education)
    {
        $this->home = $home;
        $this->service = $service;
        $this->subService = $subService;
        $this->user = $profile;
        $this->client = $client;
        $this->training = $training;
        $this->blog = $blog;
        $this->education=$education;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $home = $this->home->all();
        $services = $this->service->all();
        $subService = $this->subService->all();
        $clients = $this->client->all();
        $trainings = $this->training->all()->take(3);
        $blogs = $this->training->all()->take(3);

        $all_featured = [];
        $featured = $this->user->all()
            ->where('account_type', 'expert')
            ->where('feature', "1")
            ->sortByDesc('experience_years')->first(function ($value) {

                return true;
            });

        $featured2 =
            ($this->user->all()
            ->where('account_type', 'expert')
            ->where('feature', "1")->where('experience_years', '<', "5")
            ->sortByDesc('experience_years')->first(function ($value) {
                return true;
            }
            ));

        $featured3=$this->education->getTechnicalExperts()
            ->sortByDesc('experience_years')->first(function ($value) {
            return true;
        });


        array_push($all_featured, $featured, $featured2,$featured3);
        $all_featured = collect($all_featured);


        return view('welcome', [
            'home' => $home,
            'services' => $services,
            'featured' => $all_featured,
            'subService' => $subService,
            'clients' => $clients,
            'trainings' => $trainings,
            'blogs' => $blogs
        ]);
    }


    public function form()
    {
        $home = $this->home->all();
        return view('dashboard.admin.home.edit', [
            'home' => $home
        ]);
    }

    public function createOrUpdate(Request $request)
    {

        $data = $this->home->createOrUpdate($request);
        return redirect()->to('/edit-home');
    }


    public function changePassword(Request $request)
    {


        $user = User::findOrFail(auth::id());
        /*
        * Validate all input fields
        */

        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'Unmatch new password with confirmation');
        }

        if (Hash::check($request->old_password, $user->password)) {
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();
            return back()->with('success', 'Password changed successfully');

        } else {
            return back()->with('error', 'Wrong Current password');
        }
    }
}
