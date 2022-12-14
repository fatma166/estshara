<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use App\Modules\Core\HTTPResponseCodes;
class RegisterRequest extends FormRequest
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
            'name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'phone' => 'required|unique:users|min:5',
            'password' => 'required|min:6',
            'birth_date' => 'required|date',
            'role_id'   => 'required',
            'city_id' =>'required'
          
           
        ];
        
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
          
          
          response()->json(['status' =>false,
          'data' =>$validator->errors(),
          'message' =>HTTPResponseCodes::Validation['message'],
          ],HTTPResponseCodes::Validation['code']));
   


  }

  public function messages(){
      return[
            'name.required' => 'name is required',
            'last_name.required' => 'last_name is required',
            'phone.required' => 'phone required',
            'password.required' => 'password required',
            'birth_date.required' => 'birth_date required',
            'role_id.required'   => 'role_id required',
            'city_id.required' =>'city_id required'
             
      ];
  }
    
}
