<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\SEO;
use App\Models\Backend\SiteSettings;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;
use IIlluminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    //setting apge

    public function SiteSettings(){
    return view('backend.settings.site-settings');
    }

    //update
    //update site
public function SiteSettingsUpdate(Request $request, $id){
   SiteSettings::findOrFail($id)->update([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'address'=>$request->address,
        'blog'=>$request->blog,
        'bitcoin'=>$request->bitcoin,
        'usdt'=>$request->usdt,
        'maintenance'=>$request->maintenance,
        'facebook'=>$request->facebook,
        'instagram'=>$request->instagram,
        'twitter'=>$request->twitter,
        'chat'=>$request->chat,
    ]);
    $notification = array(
        'message' => 'Site Updated successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}

//update logo
public function SiteLogosUpdate(Request $request, $id){
    $old_image = $request->old_wlogo;
    $old_dlogo = $request->old_dlogo;
    $old_favicon = $request->old_favicon;
    if($request->file('wlogo')){
        //delete old image
        if(File::exists($old_image)){
            unlink($old_image);
        }
$image = $request->file('wlogo');
$filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
Image::make($image)->resize(139, 36)->save('uploads/logos/'.$filename);
$save_url = 'uploads/logos/'.$filename;
}

if($request->file('dlogo')){
    //delete old image
    if(File::exists($old_dlogo)){
        unlink($old_dlogo);
    }
$image1 = $request->file('dlogo');
$filename1 = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
Image::make($image1)->resize(139, 36)->save('uploads/logos/'.$filename1);
$dlogo_url = 'uploads/logos/'.$filename1;
}


if($request->file('favicon')){
    //delete old image
    if(File::exists($old_favicon)){
        unlink($old_favicon);
    }
$image2 = $request->file('favicon');
$filename2 = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
Image::make($image2)->resize(30, 30)->save('uploads/logos/'.$filename2);
$flogo_url = 'uploads/logos/'.$filename2;
}

SiteSettings::findOrFail($id)->update([
    'wlogo' => $save_url,
    'dlogo' => $dlogo_url,
    'favicon' =>$flogo_url,
]);
$notification = array(
    'message' => 'Logos Updated successfully',
    'alert-type' => 'success');
    return redirect()->back()->with($notification);

}//method

//seo
public function SEO(){
    $seo = SEO::find(1);
    return view('backend.settings.seo', compact('seo'));
}


//update seo
public function SEOUpdate(Request $request, $id){
    SEO::find(1)->update([
         'meta_author' => $request->meta_author,
         'meta_title' => $request->meta_title,
         'meta_keywords' => $request->meta_keywords,
         'meta_description' => $request->meta_description,
    ]);

    $notification = array(
        'message' => 'SEO Updated successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}



//email smtp
public function EmailSMTP(){
    return view('backend.settings.email-smtp');
}

//update email smtp
public function EmailSMTPUpdate(Request $request){
    foreach($request->types as $key => $type ){
        $this->overWriteEnvFile($type, $request[$type]);
    }

    $notification = array(
        'message' => 'Email Updated successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);

}













//over write env file

public function overWriteEnvFile($type, $val){
    if(env('DEMO MODE') != 'on'){
        $path = base_path('.env');
        if(file_exists($path)){
            $val = '"'.trim($val).'"';
            if(is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0){
                file_put_contents($path, str_replace(
                  $type.'="'.env($type).'"', $type.'='.$val, file_get_contents($path)));
            }
            else{
                file_put_contents($path, file_get_contents($path)."\r\n".$type.'='.$val);
            }
        }
    }
}





































}
