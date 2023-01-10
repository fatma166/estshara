<?php 

namespace App\Repositories;
use App\Interfaces\DoctorInterface;
use App\Models\User;
use  App\Models\Role;
use  App\Models\Report;
use  App\Models\Consulation;
use  App\models\Fav_doctor;
use Illuminate\Support\Facades\DB;

class DoctorRepositories implements DoctorInterface{


  public function list($request,$type){
    if($request['fees_range']!=null)
    $request['fees_range']=explode('-',$request['fees_range']);
//print_r(  $request['fees_range']); exit;
    $gender=$request['gender'];
 //   $data=$request->user()->doctor_detail()->get();
         $role=Role::where('name','doctor')->first('id');
   
      /*   $data=User::
                      where('role_id',$role->id)
                      ->with([
                    'doctor_detail.doctor_provider.services'=>function($query) use($request){
                        // $query->with('specialization')->addSelect('specialization_id');
                       // $query->with('');
                    }])->get(); /*,'comments_doctor'=>function($query){$query->addSelect(DB::raw('count(doctor_id)'),DB::raw('SUM(grade)'));}])->get();
                  // $dd= $data->doctor_detail()->get();*/

           //   DB::enableQueryLog();
                  $data=User::
                    where('role_id',$role->id)
                   ->where (function($query) use($request){
                    if(!empty($request['fav_doctors']))
                        $query->whereIn('id',$request['fav_doctors']);
                    })
                    ->where (function($query) use($gender){
                       if($gender!='null'&& $gender !=null)
                          $query->where('gender',$gender);
                    })
                  ->with([
                'doctor_detail'=>function($query) use($request,$type){
                       $query->with(['comments_doctor'=>function($query){$query->addSelect(DB::raw('count(doctor_id) as doctor_id'),DB::raw('SUM(grade) as grade'))->groupBy('doctor_id');}]);
                 
                       $query->with('specialization.specialization_translations');
                       
                       $query->where (function($query) use($request){
                        if($request['city_id']!='null'&& $request['city_id'] !=null)
                            $query->where('city_id',$request['city_id']);
                        });
                      
                       

                },'doctor_detail.doctor_provider.services'=>function($query) use($request){
                                                                      $query->where('service_type',1);
                                                                      $query->with('service_type.service_type_fees')
                                                                      ->whereHas('service_type.service_type_fees', function($query) use($request) {
                                                              
                                                                    
                                                                      if(is_array($request['fees_range'])){
                                                                        
                                                                          $query->where('fee','>=',(int)$request['fees_range'][0]);
                                                                          $query->where('fee','<=',(int)$request['fees_range'][1]);
                                                                       }
                                                                        //  $query->where('fee'>)
                                                                        
                                                                      });
                                                          }])->where(function($query) use($type){
                                                          if($type=='online'||'countonline')
                                                          $query->where('online_flag',1);
           
                })->where('active',1);
              // $dd= $data->doctor_detail()->get();*/



            if ($type=='countonline')
               $data=$data->count();
            else
                $data=$data->get();

          // dd(DB::getQueryLog());    
         return($data);
    
   }

   /**
    * 
    * REPORT DOCTOR
    */
  public function reportDoctor($request,$user){
    try{
      $report= new Report;
      $report->doctor_id=$request->doctor_id;
      $report->patient_id=$user;
      $report->message=$request->message;
      $report->save();
      return true;
    }catch(Exception $e){
      return false;      
    }

  }

  /**
   * 
   * 
   */
  public function doctor_details($request){
    $data=$request->all();
    $doctor_data=User::with(['doctor_detail'=> function ($query) use ($request) {
                             
                             $query->with(['specialization'=>function($query) use($request){
                                      $query->with('specialization_translations');
                             }]);
                             $query->with(['appointment']);
                             $query->with(['doctor_detail_translation']);
                             $query->with(['comments_doctor']);
                      }])->where('id',$data['doctor_id'])->first();
   
    $doctor_data['consulation_count']=Consulation::where('doctor_id',$data['doctor_id'])->count();
    
   return($doctor_data);
  }
  public function getFav($user_id){
     return(Fav_doctor::select('doctor_id')->where('patient_id',$user_id)->get()->toArray());

  }
  
 public function add_fav_Doctor($request){
   
   $fav= new Fav_doctor;
   $fav->doctor_id=$request['doctor_id'];
   $fav->patient_id=$request['patient_id'];
   $fav->save();

 }
 public function remove_fav_Doctor($request){

    $fav= new Fav_doctor;
    $fav->doctor_id=$request['doctor_id'];
    $fav->patient_id=$request['patient_id'];
    $fav->delete();
 }
 public function countConsulate($status='accept'){

 // echo $status_condition; exit;
   $results=Consulation::select('doctor_id', DB::raw('count(`id`) as count_consulate'))
                      ->where(function($query) use($status){
                                if($status!="all"){
                                    $query->where(['status'=>$status]);
                                  }
                       })->groupBy('doctor_id')->get()->toArray();
     print_r($results); 
    foreach($results as $result){
      
        $doctors[$result['doctor_id']]=$result['count_consulate'];
      
    }
    print_r($doctors); exit;
 }

}