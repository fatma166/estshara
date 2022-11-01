<?php 
namespace App\Repositories;
use App\Interfaces\DoctorInterface;
use App\Models\User;
use  App\Models\Role;
use Illuminate\Support\Facades\DB;

class DoctorRepositories implements DoctorInterface{
   public function list($request,$type){
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

            //    DB::enableQueryLog();
                  $data=User::
                    where('role_id',$role->id)
                  ->with([
                'doctor_detail'=>function($query) use($request,$type){
                       $query->with(['comments_doctor'=>function($query){$query->addSelect(DB::raw('count(doctor_id) as doctor_id'),DB::raw('SUM(grade) as grade'))->groupBy('doctor_id');}]);
                 
                       $query->with('specialization.specialization_translations');
                       

                },'doctor_detail.doctor_provider.services'=>function($query) use($request){$query->where('service_type',1);$query->with('service_type.service_type_fees');}])->where(function($query) use($type){
                  if($type=='online'||'countonline')
                  $query->where('online_flag',1);
           
                })->where('active',1);
              // $dd= $data->doctor_detail()->get();*/
//dd(DB::getQueryLog());


            if ($type=='countonline')
               $data=$data->count();
            else
                $data=$data->get();

            
         return($data);
    
   }

}