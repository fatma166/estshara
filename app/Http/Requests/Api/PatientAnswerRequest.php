<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use App\Modules\Core\HTTPResponseCodes;

class PatientAnswerRequest extends FormRequest
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
            'type'=>'required:string',
            'question_id'=>'required',
            'answer_id'=>'required_without:answer_text',
            'answer_text'=>'required_without:answer_id',
        ];
    }


    public function failedValidation(Validator $validator){

        

        throw new HttpResponseException(
            
            response()->json([
                            'status' =>false,
                            'data' =>$validator->errors(),
                            'message' =>HTTPResponseCodes::Validation['message'],
            ],HTTPResponseCodes::Validation['code']));

    }


    public function messages(){
       return[
        'type.required'=>'type is required',
        'question_id.required'=>'required question id',
        'answer_id.required_without'=>'required_without:answer_text',
        'answer_text.required_without'=>'required_without:answer_id',
    ]; 
    }
}
