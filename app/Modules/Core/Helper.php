<?php
namespace App\Modules\Core;
/*use App\Models\Zone;
use App\Mail\OrderPlaced;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\CentralLogics\RestaurantLogic;
use Illuminate\Support\Facades\Storage;
use Laravelpkg\Laravelchk\Http\Controllers\LaravelchkController;
use Grimzy\LaravelMysqlSpatial\Types\Point;*/

class Helper
{

public function rateFormmating($rates){
    
   
    $grade=0;
    foreach($rates as $index=>$rate){
        
    
       $grade+=$rate->grade;
       
    }
   
    return ceil($grade/5);
}

public function cons_priceFormmating($prices,$con_type){
    
   $prices= jsone_decode($prices);
   
    $grade=0;

    foreach($rates as $index=>$rate){
        
    
       $grade+=$rate->grade;
       
    }
   
    return ceil($grade/5);
}
public function null_formatting($datas){
   if($datas!=null){
      foreach($datas as $data){

      }
      return($datas);
   }else{
      return [];
   }

}




}