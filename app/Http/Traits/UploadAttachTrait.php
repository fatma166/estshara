<?php
namespace App\Http\Traits;
use Illuminate\Http\Request;
trait UploadAttachTrait {
    public function Upload($data) {
       
        if($data->hasFile('attach'))
        {
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $files = $data->file('attach');
        foreach($files as $file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            //dd($check);
            if($check)
            {
                $chat=Chat::create(array('consalt_id'=>$data->consalt_id,'message'=>$data->message,'from_id'=>$data->from_id,'to_id'=>$data->to_id));
                foreach ($data->attach as $attach) {
                    $filename = $attach->store('attach');
                    ChatAttachement::create([
                    'chat_id' => $chat->id,
                    'path' => $filename
                    ]);
                }
                    return true;
            }
            else
            {
                return false;
            }
        }
        }
    }
}