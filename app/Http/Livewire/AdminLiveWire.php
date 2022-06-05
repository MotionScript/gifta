<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Admin;
use Auth;
use Image;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class AdminLiveWire extends Component
{
    use WithFileUploads;

    public $cpass, $password, $password_confirmation;
    public $admin;
    public $name, $email;
    public $image;
   
    public function render()
    {



return view('livewire.admin-live-wire');
}

//admin view user details
public function AdminProfile(){
   
    return view('admin.profile.admin_profile');
}





public function delete($delete){
    User::where('id', $delete)->delete();
    session()->flash('message', 'User Deleted');
}


//update admin profile
public function update($id){
    $this->validate([
        'name'=>'required|min:3',
        'email'=>'required|email',
        
    ]);
    Admin::findOrFail($id)->update([
       'name'=>$this->name,
       'email' => $this->email,
    ]);
    $this->dispatchBrowserEvent('alert', 
           ['type' => 'success',  'message' => 'Profile Updated Successfully!']);
}
//update password
public function PassUpdate($id){
    $this->validate([
        'password'=>'required|confirmed',
        'cpass'=>'required',
    ]);
//check password
$hashedPassword = Auth::guard('admin')->user()->password;
    if(Hash::check($this->cpass, $hashedPassword)){
        Admin::findorFail($id)->update([
        'password' => Hash::make($this->password),
        ]);
        $this->dispatchBrowserEvent('alert', 
        ['type' => 'success',  'message' => 'Password Updated Successfully!']);

}else{
    $this->dispatchBrowserEvent('alert', 
        ['type' => 'error',  'message' => 'Current Password not correct!']);
}


}

// //image
// public function UpdateProfile($id){
    
//     $this->validate([
//         'image' => 'image|max:1024', // 1MB Max
//     ]);
// //     $this->image = file('image');
// // $filename = hexdec(uniqid()).'.'.$this->image->getClientOriginalExtension();
// // Image::make($this->image)->resize(100, 100)->save('uploads/admin_images/'.$filename);
// // $save_url = $this->image->store('uploads/admin_images/'.$filename);

// // Admin::findOrFail($id)->update([
// //     'image' =>$save_url,
// ]);


// $this->dispatchBrowserEvent('alert', 
//         ['type' => 'success',  'message' => 'Image Updated Successfully!']);






}














