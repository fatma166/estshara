<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DoctorRepositories;

class DoctorController extends Controller
{
    //

    public function index(Request $request){

     $doctors=new DoctorRepositories;
  
    $result=$doctors->list($request,'all');

    dd($result);
    return view('admin.doctors.doctors');


    }
    public function add(){

    }
    public function details(){

    }
}
