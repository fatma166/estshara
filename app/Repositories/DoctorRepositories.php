<?php 
namespace App\Repositories;
use App\Interfaces\DoctorInterface;
use App\Models\User;
use  App\Models\Role;
use Illuminate\Support\Facades\DB;

class DoctorRepositories implements DoctorInterface{
   public function list($request){
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

                  $data=User::
                  where('role_id',$role->id)
                 -> with(['comments_doctor'/*=>function($query1){$query1->addSelect(DB::raw('count(doctor_id)'),DB::raw('SUM(grade)'));}*/])
                  ->with([
                'doctor_detail'=>function($query) use($request){
                  $query->with('specialization.specialization_translations');
                 // $query->with(
                },'doctor_detail.doctor_provider.services'=>function($query) use($request){$query->where('service_type',1);$query->with('service_type.service_type_fees');}])->where('active',1)->get();
              // $dd= $data->doctor_detail()->get();*/
           //   print_r($data); exit;
         return($data);
    
   }

}