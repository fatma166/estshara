<?php
namespace App\Http\Traits;
use Illuminate\Http\Request;
trait UploadAttachTrait {
    public function Upload($data,$folder) {
       
        if($data->hasFile('attach'))
        {
            $allowedfileExtension=['pdf','jpg','png','docx','PNG'];
            $files = $data->file('attach');
            $images=array();
        foreach($files as $file){
          
            $filename = $file->getClientOriginalName();
            
            $extension = $file->getClientOriginalExtension();
     
            $check=in_array($extension,$allowedfileExtension);
           
            if($check)
            {
                
                $images[]=$file->move(public_path().'/images/'.$folder.'/',time().'.'.$extension);
                
                  
            }
            
        }
        return $images;
        }
    }
}