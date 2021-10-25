<?php
namespace App\Services\Utils;


class Image
{
    public function upload($dataArray,$request,$path,$imageInput){

         $destinationPath = public_path($path);

        //comment below line for local development
//        $destinationPath = public_path( '/../../'.$path);


        $image = $imageInput."-".time().'.'.request()->$imageInput->getClientOriginalExtension();
        $request->$imageInput->move($destinationPath, $image);
        $dataArray[$imageInput] = $path.$image;

        return $dataArray;
    }




}
