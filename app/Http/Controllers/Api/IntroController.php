<?php
namespace App\Http\Controllers\Api;
use App\Models\Intro;
use App\Http\Controllers\Controller;
//use App\Http\Resources\UserCollection;
//use Validator;
use App\Repositories\IntroRepository;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Api\IntroRequest;
use Illuminate\Http\Response;
 use App\Modules\Core\HTTPResponseCodes;
class IntroController extends Controller
{

    public function getIntro(IntroRequest $request){
       
        $validated=$request->validated();
        try{
        $obj=new IntroRepository();
      $result=$obj->getIntro();
      return response()->json([
        'status' => 'success',
        'data' =>$result,

         ],200);
          
        }catch (Exception $error) {
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