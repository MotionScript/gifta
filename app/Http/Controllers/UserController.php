<?php

namespace App\Http\Controllers;

use App\Models\Backend\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Image;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Facades\Hash;
use Auth;

use Illuminate\Validation\Rules;

class UserController extends Controller
{
    //show profile page
    public function Show(){
        return view('user.profile.profile');
    }

    //update profile
    public function UpdateImage(Request $request, $id){
        
    $old_image = $request->old_image;
    if($request->file('image')){
        //delete old image
        if(File::exists($old_image)){
            unlink($old_image);
        }
$image = $request->file('image');
$filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
Image::make($image)->resize(100, 100)->save('uploads/user_images/'.$filename);
$save_url = 'uploads/user_images/'.$filename;

User::findOrFail($id)->update([
      
      'image' => $save_url,
      'updated_at' => Carbon::now(),
]);
$notification = array(
    'message' => 'User Profile Updated successfully',
    'alert-type' => 'success');
    return redirect()->back()->with($notification);

}
    }


//user chnage password
public function UpdatePassword(Request $request, $id){
    $request->validate([
        'cpass' => 'required',
        'password' => 'required|confirmed', 'min:6',],[
        'cpass.required' => 'Pls. Enter Old Password',
        'password.required' => 'Pls. Enter New Password',
        
        
        ]);//end validation

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->cpass, $hashedPassword)){
            User::findorFail($id)->update([
            'password' => Hash::make($request->password),
            ]);
            $notification = array(
                'message' => 'Password Updated Successfully',
                'alert-type' => 'success' );
                return redirect()->back()->with($notification);
        
            }else{
                $notification = array(
                    'message' => 'Current Password Not Match',
                    'alert-type' => 'error' );
                    return redirect()->back()->with($notification);
            }
}


//user update profile
public function UpdateProfile(Request $request, $id){
    User::findOrFail($id)->update([
          'name'=>$request->name,
          'phone' =>$request->phone,
          'email'=>$request->email,
    ]);
    $notification = array(
        'message' => 'Profile Updated Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}

//user update bank
public function UpdateBank(Request $request, $id){
    $request->validate([
        'account_name' => ['required', 'string','min:3', 'max:20'],
        'account_no' => ['required', 'digits_between:10,10'],
        'bank_name' => ['required', 'string','min:3', 'max:20'],
       ]);//end validation
       User::findOrFail($id)->update([
           'bank_name'=> $request->bank_name,
           'account_no'=> $request->account_no,
           'account_name'=> $request->account_name,
       ]);
       $notification = array(
        'message' => 'Bank Updated Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}


//user wallet page
public function Bank(){
    return view('user.transactions.wallet');
}

//user transactions page
public function Transactions(){
    $trade = Trade::where('user_id', Auth::user()->id)->first();
    return view('user.transactions.history');
}





























}
