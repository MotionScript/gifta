<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\User;
use Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Exists;

class AdminController extends Controller
{
        //admin login
public function Index(){
    return view('admin.auth.admin_login');
}

//admin dashboard
public function AdminDashboard(){
    return view('admin.index');
}


public function AdminLogin(Request $request){
    $check = $request->all();
    if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
        return redirect()->route('admin_dashboard')->with('success', 'Admin Login Successfully');
    }
    else{
        return back()->with('error', 'Invalid Email or Password');
    }
}



//admin view users
public function AdminViewUsers(){
    $users = User::all();
    return view('backend.users.users', compact('users'));
}


//admin view sub admin users
public function AdminUsers(){
    $admins = Admin::where('type', 2)->get();
    return view('backend.users.admin-users', compact('admins'));
}



//admin view user details
public function AdminViewUsersDetails($user){
    $user = User::findOrFail($user);
    return view('backend.users.details', compact('user'));
}


//admin delete user
public function AdminDeleteUser($id){
    User::findOrFail($id)->delete();
    $notification = array(
        'message' => 'User Deleted successfully',
        'alert-type' => 'success');
        return redirect()->route('site-users')->with($notification);
}

//admin updatepic
public function AdminUpdatePics(Request $request, $id){

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

Admin::findOrFail($id)->update([

      'image' => $save_url,
      'updated_at' => Carbon::now(),
]);
$notification = array(
    'message' => 'Admin Profile Updated successfully',
    'alert-type' => 'success');
    return redirect()->back()->with($notification);

}else{
    Admin::findOrFail($id)->update([

        'image' => $old_image,
        'updated_at' => Carbon::now(),
  ]);
  $notification = array(
      'message' => 'Admin Profile Updated successfully',
      'alert-type' => 'success');
      return redirect()->back()->with($notification);
}


}

//add new admin user
public function AdminUsersStore(Request $request){

    $image = $request->file('image');
    $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(100, 100)->save('uploads/user_images/'.$filename);
    $save_url = 'uploads/user_images/'.$filename;


    Admin::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> Hash::make($request->password),
        'image' =>  $save_url,
        'user' => $request->user,
        'wallet' => $request->wallet,
        'card' => $request->card,
        'trade' => $request->trade,
        'frontend' => $request->frontend,
        'page'=> $request->page,
        'settings' => $request->settings,
        'adminuserrole'=> $request->adminuserrole,
        'type' => 2,
    ]);

    $notification = array(
        'message' => 'Admin Added successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}



//admin edit admin user role
public function AdminUsersEdit($id){
    $admin = Admin::findOrFail($id);
    return view('backend.users.edit_admin', compact('admin'));

}


//delete admin
public function AdminUsersDelete($id){
    $d = Admin::findOrFail($id);
    $img = $d->image;
    unlink($img);
    Admin::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Admin Deleted successfully',
        'alert-type' => 'success');
        return redirect()->back()->with($notification);
}



//admin update admin user role
public function AdminUsersUpdate(Request $request, $id){
    Admin::findOrFail($id)->update([

        'name'=> $request->name,
        'email'=> $request->email,
        'user' => $request->user,
        'wallet' => $request->wallet,
        'card' => $request->card,
        'trade' => $request->trade,
        'frontend' => $request->frontend,
        'page'=> $request->page,
        'settings' => $request->settings,
        'adminuserrole'=> $request->adminuserrole,
        'type' => 2,
    ]);

    $notification = array(
        'message' => 'Admin Udated successfully',
        'alert-type' => 'success');
        return redirect()->route('admin-users')->with($notification);
}

















































































}
