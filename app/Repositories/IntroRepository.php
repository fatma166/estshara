<?php 
namespace App\Repositories;
use App\Models\Intro;
use App\Interfaces\IntroInterface;
use App\Http\Resources\IntroCollection;
use Illuminate\Http\Response;
use App\Modules\Core\HTTPResponseCodes;
class IntroRepository implements IntroInterface{


    public function getIntro() {
       $result=Intro::get();
        print_r($result);exit;
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
        return IntroCollection::toArray($result);
    }


}