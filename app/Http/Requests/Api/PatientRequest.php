<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
       // print_r($this->all());exit;
        return [
            //
        
   
          'firstname' => 'string|nullable',
          'lastname' => 'string|nullable',
            'email' => 'email|unique:users,email|nullable',
            'phone' => 'digits_between:11,15|unique:users|nullable',
            'avatar' => 'mimes:png,jpeg,jpg|nullable',
   //  'password'=>'required|min:8',
//'birthdate'=>'required',
//'gender'=>'required'
        ];
    }
}
