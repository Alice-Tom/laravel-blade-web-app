<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title'=>'required',
            'description'=>'required',
            'cover'=>'required',
            'start_day'=>'required',
            'start_time'=>'required',
            'end_day'=>'required',
            'end_time'=>'required',
            'trainer',
    
        ];
    }
}


