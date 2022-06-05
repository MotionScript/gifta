<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


use Image;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if (User::where('email', $request->email )->exists()){
            return redirect()->back()->with('error', 'We know this email already, choose another one');
        }
        else{

            // dd($request->all());

            $image = $request->file('image');
            $filename = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(100, 100)->save('uploads/user_images/'.$filename);
            $save_url = 'uploads/user_images/'.$filename;




        $request->validate([
            'name' => ['required', 'string','min:3', 'max:20'],
            'phone' => ['required', 'digits_between:11,11'],
            'pin' => ['required', 'digits_between:4,4'],
            'email' => ['required', 'string', 'email', 'max:25', 'unique:users'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:1024'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'pin' => $request->pin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $save_url,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

}
