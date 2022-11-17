<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class MidicalDetailsRequest extends FormRequest
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
            'weight'=>'required',
            'length'=>'required',
            'rh'=>'nullable|required',
            'smoking'=>'required',
            'alchole'=>'required',
            'Marital_status'=>'required'
        ];
    }
}
