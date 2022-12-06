<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use App\Modules\Core\HTTPResponseCodes;
class GeneticDiseasesRequest extends FormRequest
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
            'relation'=>'required',
            'diseases_name'=>'required'
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
        'relation.required'=>'relation is reuired',
        'diseases_name.required'=>' required deases name'
        
    ];
   }
}
