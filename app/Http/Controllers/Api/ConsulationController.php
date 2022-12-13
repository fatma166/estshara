<?php

namespace App\Http\Controllers\Api;
use  App\Repositories\ConsulationRepositories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Core\Helper;
use App\Modules\Core\HTTPResponseCodes;
use App\Http\Traits\UploadAttachTrait;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;
use App\Http\Requests\Api\DonsulatDragsRequest;
use App\Models\ChatAttachement;
class ConsulationController extends Controller
{
    //
    use UploadAttachTrait;
      /**
       * 
      */
    public function list_consultation($status='all',$start=0,$end=5,$id=null){
       
        $consaltation=new ConsulationRepositories();
        $data= $consaltation->list_consultation($status,$start,$end,$id);
        return response()->json([
              'status' =>HTTPResponseCodes::Sucess['status'],
              'data' =>$data,
              'message'=> HTTPResponseCodes::Sucess['message'],
              
      
        ],HTTPResponseCodes::Sucess['code']);
        
     }
           /**
       * 
      */
     public function cancle_consultation($id){

        $consaltation=new ConsulationRepositories();
        $data=$consaltation->cancle_consultation($id);
        if($data==false){

            return response()->json([
                'status' =>HTTPResponseCodes:: BadRequest['status'],
                'data' =>[],
                'message'=> HTTPResponseCodes:: BadRequest['message'],
               
        
               ],HTTPResponseCodes:: BadRequest['code']);


        }
        return response()->json([
         'status' =>HTTPResponseCodes::Sucess['status'],
         'data' =>$data,
         'message'=> HTTPResponseCodes::Sucess['message'],
        
 
        ],HTTPResponseCodes::Sucess['code']);
     }
           /**
       * 
      */
     public function get_invoice($id){
       
        $consaltation=new ConsulationRepositories();
        $data=$consaltation->get_invoice($id);
        
        return response()->json([
         'status' =>HTTPResponseCodes::Sucess['status'],
         'data' =>$data,
         'message'=> HTTPResponseCodes::Sucess['message'],
        
 
        ],HTTPResponseCodes::Sucess['code']);
     }
      /**
       * 
      */
     function details_consultation($id){
      
          $consaltation=new ConsulationRepositories();
          $data=$consaltation->details_consultation($id);
          return response()->json([
            'status' =>HTTPResponseCodes::Sucess['status'],
            'data' =>$data,
            'message'=> HTTPResponseCodes::Sucess['message'],
           
    
           ],HTTPResponseCodes::Sucess['code']);
     }
           /**
       * 
      */
     public function chat_consultation($id,$type="reg"){

    
      $consaltation=new ConsulationRepositories();
      $data=$consaltation->chat_consultation($id,$type);
      return response()->json([
        'status' =>HTTPResponseCodes::Sucess['status'],
        'data' =>$data,
        'message'=> HTTPResponseCodes::Sucess['message'],
       

       ],HTTPResponseCodes::Sucess['code']);

      }

      /**
       * 
      */

      public function send_message(Request $request){
        
         $input=$request->all();
        // 'user_sharing_image.*' => 'mimes:doc,pdf,docx,zip' for  validation

        $data['message']= $input['message'];
        $data['from']=Auth::guard('api')->user()->id;
        $data['to']=$input['to'];
        $data['attach']=$input['attach'];
        $data['consalt_id']=$input['consalt_id'];
       
        if(!empty($data['attach']))
         $images=$this->Upload($request,'chat');
         
         if($images!=false)
         
        
                $chat=Chat::create(array('consalt_id'=>$data['consalt_id'],'message'=>$data['message'],'from_id'=>$data['from'],'to_id'=>$data['to']));
                foreach ($images as $image) {
                    $filename = $image;
                    ChatAttachement::create([
                    'chat_id' => $chat->id,
                    'path' => $filename
                    ]);
                }
                return response()->json([
                  'status' =>HTTPResponseCodes::Sucess['status'],
                  'data' =>[],
                  'message'=> HTTPResponseCodes::Sucess['message'],
                 
          
                 ],HTTPResponseCodes::Sucess['code']);
     }
      /**
       * 
      */

     public function consulate_note(Request $request){
        $consaltation=new ConsulationRepositories();
        $data=$consaltation->consulate_note($request);
        if(!($data==null))
        $data=$data->toArray($data);
      
      return response()->json([
       'status' =>HTTPResponseCodes::Sucess['status'],
       'data' =>Helper::null_formatting($data),
       'message'=> HTTPResponseCodes::Sucess['message'],
      

      ],HTTPResponseCodes::Sucess['code']);
     }

      /**
       * 
      */

     public function consulat_drags(DonsulatDragsRequest $request){
         $consaltation=new ConsulationRepositories();
         $data=$consaltation->consulat_drags($request);
         if(!($data==null))
         $data=$data->toArray($data);
      
         return response()->json([
         'status' =>HTTPResponseCodes::Sucess['status'],
         'data' =>Helper::null_formatting($data),
         'message'=> HTTPResponseCodes::Sucess['message'],
         

         ],HTTPResponseCodes::Sucess['code']);
     }
}
