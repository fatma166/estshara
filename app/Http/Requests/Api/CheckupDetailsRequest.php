<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use App\Modules\Core\HTTPResponseCodes;
class CheckupDetailsRequest extends FormRequest
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
            'name'=>'required',
            'attach'=>'required|image|mimes:png,jpeg,jpg'
        ];
    }
    public function failedValidation(Validator $validator)
    {

       throw new HttpResponseException(response()->json([
        'status' =>false,
        'data' =>$validator->errors(),
        'message' =>HTTPResponseCodes::Validation['message'],
        ],HTTPResponseCodes::Validation['code']));
       /*   return response()->json([
            'status' =>false,
            'data' =>$validator->errors(),
            'message' =>HTTPResponseCodes::Validation['message'],
            ],HTTPResponseCodes::Validation['code']);*/
    }
    public function messages(){

         return [

            'name.required' =>'name is require',
            'attach.required' => 'attach must img',
             'attach.mimes' => 'attach must be png,jpg,jpeg',
          
        ];
    }
    
}
