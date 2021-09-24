<?php

namespace App\Http\Controllers;
use App\Services\Client;
use App\Services\Home;
use App\Services\Service;
use App\Services\SubService;
use App\Services\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $home;
    private $service;
    private $subService;
    private $user;
    private $client;
    public function __construct(Home $home,Service $service,SubService $subService,Profile $profile,Client $client){
        $this->home = $home;
        $this->service = $service;
        $this->subService = $subService;
        $this->user = $profile;
        $this->client=$client;
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
        $subService=$this->subService->all();
        $clients=$this->client->all();
        $featured = $this->user->all()
                    ->where('account_type','expert')
                    ->where('feature',true)
                    ->sortBy('name');



        return view('welcome',[
            'home'=>$home,
            'services' =>$services,
            'featured' =>$featured,
            'subService'=>$subService,
            'clients'=>$clients
        ]);
    }


    public function form()
    {
        $home = $this->home->all();
        return view('dashboard.admin.home.edit',[
            'home'=>$home
        ]);
    }
    public function createOrUpdate(Request $request){

        $data = $this->home->createOrUpdate($request);
        return redirect()->to('/edit-home');
    }


    public function changePassword(Request $request){


        $user = User::findOrFail(auth::id());
        /*
        * Validate all input fields
        */

        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if($validator->fails())
        {
            return back()->with('error','Unmatch new password with confirmation');
        }

        if (Hash::check($request->old_password, $user->password)) {
        $user->fill([
            'password' => Hash::make($request->old_password)
            ])->save();
            return back()->with('success','Password changed successfully');

        } else {
            return back()->with('error','Wrong Current password');
        }
    }
}
