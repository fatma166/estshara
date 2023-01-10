<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DoctorRepositories;
use App\Http\Resources\DectorDetailsResource;
use Illuminate\Support\Facades\App;
use  App\Models\Locale;

class DoctorController extends Controller
{
    //

    public function index(Request $request){

     $doctor_object=new DoctorRepositories;
  
    $doctors=$doctor_object->list($request,'all');
    $doctors_countconsulate=$doctor_object->countConsulate('wait');

    print_r($doctors); exit;
    $doctors=DectorDetailsResource::collection($doctors);
    
    print_r($doctors); exit;
    $locale=App::getLocale();
    $locale_id=Locale::with(['locale_translations'=>function($query) use($locale){$query->where('name',$locale);}])->value('id');
     print_r($locale_id); exit;
    return view('admin.doctors.doctors',compact('doctors'));


    }
    public function add(){

    }
    public function details(){

    }
}
