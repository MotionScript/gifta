<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomePage\FirstSection;
use App\Models\HomePage\SecondSection;
use App\Models\HomePage\Testimony;
use App\Models\HomePage\ThirdSection;
use App\Models\HomePage\WhyUs;
use App\Models\HomePage\FAQ;
use Illuminate\Http\Request;

use Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rules\Exists;

class SectionController extends Controller
{
    //first section
    public function FirstSection(){
        $first = FirstSection::find(1);
        return view('backend.sections.first-section', compact('first'));
    }

//update first
public function FirstSectionUpdate(Request $request){
    $id = $request->id;
    $old_image = $request->old_image;

    if($request->file('image')){
        //delete old image
        if(File::exists($old_image)){
            unlink($old_image);
        }
$image = $request->file('image');
$filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
Image::make($image)->resize(694, 360)->save('uploads/section_images/'.$filename);
$save_url = 'uploads/section_images/'.$filename;

FirstSection::findOrFail($id)->update([
      'title' => $request->title,
      'sm' => $request->sm,
      'image' => $save_url,
      'updated_at' => Carbon::now(),
]);
$notification = array(
    'message' => 'Section Updated successfully',
    'alert-type' => 'success');
    return redirect()->back()->with($notification);

}else{
    FirstSection::findOrFail($id)->update([
        'title' => $request->title,
        'sm' => $request->sm,
        'image' => $old_image,
        'updated_at' => Carbon::now(),
  ]);
  $notification = array(
      'message' => 'Section Updated successfully',
      'alert-type' => 'success');
      return redirect()->back()->with($notification);
}
}


//second section
public function SecondSection(){
    $images = SecondSection::all();
    return view('backend.sections.second-section', compact('images'));
}

//add second
public function AddSecond(Request $request){
    $image = $request->file('image');
$filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
Image::make($image)->resize(367, 232)->save('uploads/section_images/'.$filename);
$save_url = 'uploads/section_images/'.$filename;

SecondSection::insert([
     'image'=>$save_url,
]);
$notification = array(
    'message' => 'Image Inserted successfully',
    'alert-type' => 'success');
    return redirect()->back()->with($notification);
}



public function AddSecondDelete($id){
    $img = SecondSection::findOrFail($id);
    $i = $img->image;
    unlink($i);
    SecondSection::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Image deleted successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}
//third section
public function ThirdSection(){
    $third = ThirdSection::find(1);
    return view('backend.sections.third-section', compact('third'));
}

//update third
public function UpdateThird(Request $request){
    $id = $request->id;
    $old_image = $request->old_image;

    if($request->file('image')){
        //delete old image
        if(File::exists($old_image)){
            unlink($old_image);
        }
$image = $request->file('image');
$filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
Image::make($image)->resize(800, 600)->save('uploads/section_images/'.$filename);
$save_url = 'uploads/section_images/'.$filename;

ThirdSection::findOrFail($id)->update([
      'title' => $request->title,
      'body' => $request->body,
      'image' => $save_url,
      'updated_at' => Carbon::now(),
]);
$notification = array(
    'message' => 'Section Updated successfully',
    'alert-type' => 'success');
    return redirect()->back()->with($notification);

}else{
    ThirdSection::findOrFail($id)->update([
        'title' => $request->title,
        'body' => $request->body,
        'image' => $old_image,
        'updated_at' => Carbon::now(),
  ]);
  $notification = array(
      'message' => 'Section Updated successfully',
      'alert-type' => 'success');
      return redirect()->back()->with($notification);
}

}


//testimony page
public function Testimony(){
    $testi = Testimony::all();

    return view('backend.sections.testimony', compact('testi'));
}

//store testimoney
public function AddTesti(Request $request){
    $image = $request->file('image');
$filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
Image::make($image)->resize(250, 250)->save('uploads/section_images/'.$filename);
$save_url = 'uploads/section_images/'.$filename;
    Testimony::insert([
          'body' => $request->body,
          'name' => $request->name,
          'job' => $request->job,
          'image' => $save_url,
    ]);
    $notification = array(
        'message' => 'Testimony Inserted successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}

//delete testimo0ny
public function DeleteTesti($id){
    $img = Testimony::findOrFail($id);
    $im = $img->image;
    unlink($im);
    Testimony::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Testimony Deleted successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}


//why us section
public function Why_Us(){
    $why = WhyUs::all();
    return view('backend.sections.why_us', compact('why'));
}

//post why us
public function Why_UsStore(Request $request){
    WhyUs::insert([
         'icon' => $request->icon,
         'title' => $request->title,
         'body' => $request->body,
         'created_at' => Carbon::now(),
    ]);
    $notification = array(
        'message' => 'Why Us Inserted successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}

//delete why
public function Why_UsDelete($id){
    WhyUs::findOrFail($id)->delete();
    $notification = array(
        'message' => 'Why Us Deleted successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}

//edit why us
public function Why_UsEdit($id){
    $item = WhyUs::findOrFail($id);
        return view('backend.sections.edit_why', compact('item'));
    
}
//update why us
public function Why_UsUpdate(Request $request, $id){
    WhyUs::findOrFail($id)->update([
            'icon'=>$request->icon,
            'title'=>$request->title,
            'body'=>$request->body,
    ]);

    $notification = array(
        'message' => 'Why Us Updated successfully',
        'alert-type' => 'success');
        return redirect()->route('why-us')->with($notification);
}


//FAQ
public function FAQ(){
    $faq = FAQ::all();
    return view('backend.sections.faq', compact('faq'));
}

//store faq
public function FAQStore(Request $request){
    FAQ::create([
          'q'=>$request->q,
          'a'=>$request->a,
    ]);
    $notification = array(
        'message' => 'FQA Inserted successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}

//delete faq
public function FAQDelete($id){
    FAQ::findOrFail($id)->delete();
    $notification = array(
        'message' => 'FQA Deleted successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}

//edit faq
public function FAQEdit($id){
   $f =  FAQ::findOrFail($id);
    return view('backend.sections.edit_faq', compact('f'));
}

//update faq
public function FAQUpdate(Request $request, $id){
    FAQ::findOrFail($id)->update([
           'q'=>$request->q,
           'a'=>$request->a,
    ]);
    $notification = array(
        'message' => 'FQA Updated successfully',
        'alert-type' => 'success');
        return redirect()->route('faq')->with($notification);
}






































}
