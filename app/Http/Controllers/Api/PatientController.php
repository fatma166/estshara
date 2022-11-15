<?php
/**
 * @author fatmaGhareeb
 * @copyright 2022
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PatientRepository;
use App\Http\Requests\Api\PatientRequest;
class PatientController extends Controller
{
    //
    public function editProfile(PatientRequest $request){
        $validated = $request->validated();
       
       $profile=new PatientRepository();
       $user= $request->user();
        $profile= $profile->editProfile($validated,$user);
       if($profile==true){
            return response()->json([
                'status' => 'success',
                'data' =>$profile,

                ],200);
 
        }else{
            return new Response(
                [
                    "exception" => get_class($error),
                    "errors" => $error->getMessage()
                ],
                HTTPResponseCodes::BadRequest["code"]
            ); 
        }
    }
}
