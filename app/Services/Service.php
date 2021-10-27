<?php

namespace App\Services;

use App\Repository\ServiceRepositoryInterface;
use App\Services\Utils\Image;
use auth;

class Service
{
    protected $serviceInterface;
    protected $image;

    public function __construct(ServiceRepositoryInterface $serviceInterface, Image $image)
    {
        $this->ServiceInterface = $serviceInterface;
        $this->image = $image;
    }

    public function create($request)
    {
        $params = [];
        if (empty($request->cover) && empty($request->bottom_cover) &&
            empty($request->title) && empty($request->description) &&
            empty($request->bottom_title) && empty($request->bottom_description)) {
            return false;
        }
        $params = $this->image->upload($params, $request, 'uploads/services/', 'cover');
        $params = $this->image->upload($params, $request, 'uploads/services/', 'bottom_cover');
        $params = $this->image->upload($params, $request, 'uploads/services/', 'bottom_cover2');
        $params = $this->image->upload($params, $request, 'uploads/services/', 'bottom_cover3');
        $params['title'] = $request->title;
        $params['description'] = $request->description;
        $params['bottom_title'] = $request->bottom_title;
        $params['bottom_description'] = $request->bottom_description;
        $params['bottom_title2'] = $request->bottom_title2;
        $params['bottom_description2'] = $request->bottom_description2;
        $params['bottom_title3'] = $request->bottom_title3;
        $params['bottom_description3'] = $request->bottom_description3;

        $this->ServiceInterface->create($params);
        return true;
    }

    public function update($id, $request)
    {
        if ($this->ServiceInterface->findById($id)) {
            $params = [];
            if (!empty($request->cover) && !empty($request->bottom_cover) && !empty($request->bottom_cover2) && !empty($request->bottom_cover3)) {
                $params = $this->image->upload($params, $request, 'uploads/services/', 'cover');
                $params = $this->image->upload($params, $request, 'uploads/services/', 'bottom_cover');
                $params = $this->image->upload($params, $request, 'uploads/services/', 'bottom_cover2');
                $params = $this->image->upload($params, $request, 'uploads/services/', 'bottom_cover3');
            }

            $params['title'] = $request->title;
            $params['description'] = $request->description;
            $params['bottom_title'] = $request->bottom_title;
            $params['bottom_description'] = $request->bottom_description;
            $params['bottom_title2'] = $request->bottom_title2;
            $params['bottom_description2'] = $request->bottom_description2;
            $params['bottom_title3'] = $request->bottom_title3;
            $params['bottom_description3'] = $request->bottom_description3;
            return $this->ServiceInterface->update($id, $params);
        } else {
            return false;
        }

    }

    public function findById($id)
    {

        return $this->ServiceInterface->findById($id);
    }

    public function all()
    {
        return $this->ServiceInterface->all();
    }

    public function deleteById($id)
    {
        return $this->ServiceInterface->deleteById($id);
    }

}
