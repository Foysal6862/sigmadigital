<?php


use Illuminate\Http\Request;


function file_upload(Request $request,$institution,$field_name='attachment',$mimes_string='',$upload_path=''){

    if($mimes_string){
        \Illuminate\Support\Facades\Validator::make((array) $request, [
            $field_name => ['required', $mimes_string,]
        ]);
    }else{

        \Illuminate\Support\Facades\Validator::make((array) $request, [
            $field_name => ['required', 'mimes:docx,doc,pdf,txt,jpg,jpeg,png,gif'],
        ]);
    }



    $size = $request->file($field_name)->getSize();
    if ($size){
        $size /=1000;
    }
    $usages = \App\Usage::where('institution_id',$institution->id)->first();

    if ($usages->storage_used+$size > $usages->storage_limit){
        return back()->withSuccess('You don\t have enough storage. Upgrade your membership');
    }

    $usages->storage_used +=$size;
    $usages->save();



    if ($institution){
    }
    $upload_folder = 'upload';
    if(isset($institution->id)){
        $institution_path = $institution->id;
    }else{
        $institution_path = 'parent';
    }

    $file      = $request->file($field_name);
    $fileName  = date('ymdhis').'.'.$file->getClientOriginalExtension();
    $path       = $upload_folder.'/'.$institution_path.'/'.$upload_path;

    $file->move($path, $fileName);
    $fileUrl   = $path . $fileName;
    return $fileUrl;
}
