<?php 
namespace App\Repositories;
use App\Models\Intro;
use App\Interfaces\IntroInterface;

use Illuminate\Http\Response;
use App\Modules\Core\HTTPResponseCodes;
use App\Http\Resources\IntroResource;
class IntroRepository implements IntroInterface{


    public function getIntro() {
       $result=Intro::all();
       
     return  IntroResource::collection($result);
        /*if ($result->isEmpty()) {
            return new Response(
                [
                    "exception" => HTTPResponseCodes::InvalidArguments["title"],
                    "errors" => HTTPResponseCodes::InvalidArguments["message"]
                ],
                HTTPResponseCodes::InvalidArguments["code"]
            );
            
        }
        echo $result; exit;*/
      
    }


}