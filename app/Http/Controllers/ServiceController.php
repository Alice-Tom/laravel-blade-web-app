<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Service;
use App\Services\SubService;

class ServiceController extends Controller
{
    private $service;
    private $subService;

    public function __construct(Service $service,SubService $subService){
        $this->service = $service;
        $this->subService = $subService;
    }

    public function addServiceForm(){
        return view('dashboard.admin.services.new-service');
    }

    public function subServiceForm(){
        $services = $this->service->all();
        return view('dashboard.admin.subservices.add',[
            'services'=>$services
        ]);
    }

    public function subServiceAdd(Request $request){
        $services = $this->service->all();
        $response =  $this->subService->create($request);
        return $response ? redirect()->to('/service-item-list') : redirect()->back();
    }

    public function addService(Request $request){
      $response =  $this->service->create($request);
      return $response ? redirect()->to('/all-services') : redirect()->back();
    }

    public function allService(){
        $services = $this->service->all();
        return view('dashboard.admin.services.all-services',[
            'services'=>$services
        ]);
    }

    public function allSubService(){
        $subservices = $this->subService->all();
        return view('dashboard.admin.subservices.all',[
            'subservices'=>$subservices
        ]);
    }

    //Edit
    public function editService($id){



        $service = $this->service->findById($id);
        return view('dashboard.admin.services.edit-service',[
            'service' => $service
        ]);
    }

    public function editSubService($id){
        $service = $this->subService->findById($id);
        $services = $this->service->all();
        return view('dashboard.admin.subservices.edit',[
            'service' => $service,
            'services' =>$services
        ]);
    }

    //Update
    public function updateService($id,Request $request){
        $response = $this->service->update($id,$request);
        return $response ? redirect()->to('/all-services') : redirect()->back();
    }

    public function updateSubService($id,Request $request){
        $response = $this->subService->update($id,$request);
        return $response ? redirect()->to('/service-item-list') : redirect()->back();
    }

    //Delete
    public function deleteService($id){
        $this->service->deleteById($id);
        return redirect()->to('/all-services');
    }

    public function deleteSubService($id){
        $this->subService->deleteById($id);
        return redirect()->to('/service-item-list');
    }

    //show service
    public function showService($id,$title){


        $services=$this->service->all();
        $service = $this->service->findById($id);
        return view('pages.service-parent',[
            'service' => $service,
            'services'=>$services
        ]);
    }

    public function showSubService($id,$title){
        $service  = $this->subService->findById($id);
        $subService = $this->subService->all();
        return view('pages.service-child',[
            'service' => $service,
            'subServices' =>$subService,
        ]);
    }

}
