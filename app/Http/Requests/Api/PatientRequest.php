<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use App\Modules\Core\HTTPResponseCodes;
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
        
   
            'firstname' =>'sometimes|min:5',
            'lastname' => 'sometimes|required',
            'email' => 'sometimes|email',//|unique:users,email
            'country_code' => 'sometimes|required',
            'phone' => 'sometimes|required|digits_between:11,15|unique:users',
            'avatar' => 'sometimes|required|mimes:png,jpeg,jpg',
            'password'=>'sometimes|required|min:8',
            'birthdate'=>'sometimes|required',
            'gender'=>'sometimes|required'
        ];
    }
    public function failedValidation(Validator $validator)

    {

      /* throw new HttpResponseException(response()->json([

            'success'   => false,

            'message'   => 'Validation errors',

            'data'      => $validator->errors()

        ],422));*/
          return response()->json([
            'status' =>false,
            'data' =>$validator->errors(),
            'message' =>HTTPResponseCodes::Validation['message'],
            ],HTTPResponseCodes::Validation['code']);
    }



    

    public function messages(){

         return [

            'firstname.required' =>'first name is require',
            'lastname.required' => 'last name is require',
            'email.required' => 'email is required',
            'phone.required' => 'phone is required',
            'avatar.required' => 'avatar required',
            'password.required'=>'password required ',
            'birthdate.required'=>'birthdatae required',
            'gender.required'=>'gender required'

        ];
    }
}
