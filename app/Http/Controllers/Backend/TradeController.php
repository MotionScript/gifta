<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\NotifyAdmin;
use App\Models\Backend\MultiImage;
use App\Models\Backend\SiteSettings;
use App\Models\Backend\Trade;
use App\Models\User;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Image;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\File\File as FileFile;

class TradeController extends Controller
{
    //gift card trade
public function GiftCard(){
    return view('user.trades.gift_card.gift_card');
}
//store gift card trade
public function GiftCardStore(Request $request){
    //check if user has uploaded his bank
$user = User::where('id', Auth::guard('web')->user()->id)->first();
if($user->account_no == NULL){
    $notification = array(
        'message' => 'Please Update Your Bank Details To Trade..',
        'alert-type' => 'error' );
        return redirect()->route('user-bank')->with($notification);
}

else{



  $trade_id = Trade::insertGetId([
         'user_id' => Auth::guard('web')->user()->id,
         'card_id' => $request->category_id,
         'type' => 'Card Trade',
         'amount'=> $request->amount,
         'pay'=> $request->pay,
         'rate'=> $request->subcategory_id,
         'comment' => $request->comment,
         'created_at' => Carbon::now(),
]);

//insert payment proves
$images = $request->file('image');
// dd($images);
foreach ($images as  $img) {
$file = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
Image::make($img)->resize(917, 450)->save('uploads/trade_image/'.$file);
$imgs_url = 'uploads/trade_image/'.$file;



MultiImage::insert([
         'trade_id' => $trade_id,
         'images' => $imgs_url,
         'created_at' => Carbon::now(),
]);

}
$tr = Trade::where('id', $trade_id)->first();
$site = SiteSettings::find(1);
$adminEmail = $site->email;
$amount = $tr->amount;
$rate = $tr->rate;
$type = $tr->type;

$data = [
    'amount'=>$amount,
    'rate'=>$rate,
    'type' =>$type,
];
Mail::to($adminEmail)->send(new NotifyAdmin($data));








$notification = array(
    'message' => 'Your Tarde Has Been initiated  successfully..',
    'alert-type' => 'success' );
    return redirect()->route('dashboard')->with($notification);


}

}//end method


//user trade bitcoin
public function TradeBitcoin(){
    return view('user.trades.bitcoin.bitcoin');
}



public function TradeBitcoinStore(Request $request){

    $user = User::where('id', Auth::guard('web')->user()->id)->first();
if($user->account_no == NULL){
    $notification = array(
        'message' => 'Please Update Your Bank Details To Trade..',
        'alert-type' => 'error' );
        return redirect()->route('user-bank')->with($notification);
}

else{
    
  $trade_id = Trade::insertGetId([
    'user_id' => Auth::guard('web')->user()->id,
    
    'type' => 'Bitcoin Trade',
    'amount'=> $request->amount,
    'pay'=> $request->pay,
    'rate'=> $request->rate,
    'comment' => $request->comment,
    'created_at' => Carbon::now(),
]);

//insert payment proves
$images = $request->file('image');
// dd($images);
foreach ($images as  $img) {
$file = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
Image::make($img)->resize(917, 450)->save('uploads/trade_image/'.$file);
$imgs_url = 'uploads/trade_image/'.$file;



MultiImage::insert([
    'trade_id' => $trade_id,
    'images' => $imgs_url,
    'created_at' => Carbon::now(),
]);

}
$tr = Trade::where('id', $trade_id)->first();
$site = SiteSettings::find(1);
$adminEmail = $site->email;
$amount = $tr->amount;
$rate = $tr->rate;
$type = $tr->type;

$data = [
'amount'=>$amount,
'rate'=>$rate,
'type' =>$type,
];
Mail::to($adminEmail)->send(new NotifyAdmin($data));








$notification = array(
'message' => 'Your Tarde Has Been initiated  successfully..',
'alert-type' => 'success' );
return redirect()->route('dashboard')->with($notification);
}


}

//user trade usdt
public function TradeUSDT(){
    return view('user.trades.usdt.usdt');
}

//store usdt
public function TradeUSDTStore(Request $request){

    
    $user = User::where('id', Auth::guard('web')->user()->id)->first();
if($user->account_no == NULL){
    $notification = array(
        'message' => 'Please Update Your Bank Details To Trade..',
        'alert-type' => 'error' );
        return redirect()->route('user-bank')->with($notification);
}

else{
    
  $trade_id = Trade::insertGetId([
    'user_id' => Auth::guard('web')->user()->id,
    
    'type' => 'USDT Trade',
    'amount'=> $request->amount,
    'pay'=> $request->pay,
    'rate'=> $request->rate,
    'comment' => $request->comment,
    'created_at' => Carbon::now(),
]);

//insert payment proves
$images = $request->file('image');
// dd($images);
foreach ($images as  $img) {
$file = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
Image::make($img)->resize(917, 450)->save('uploads/trade_image/'.$file);
$imgs_url = 'uploads/trade_image/'.$file;



MultiImage::insert([
    'trade_id' => $trade_id,
    'images' => $imgs_url,
    'created_at' => Carbon::now(),
]);

}
$tr = Trade::where('id', $trade_id)->first();
$site = SiteSettings::find(1);
$adminEmail = $site->email;
$amount = $tr->amount;
$rate = $tr->rate;
$type = $tr->type;

$data = [
'amount'=>$amount,
'rate'=>$rate,
'type' =>$type,
];
Mail::to($adminEmail)->send(new NotifyAdmin($data));








$notification = array(
'message' => 'Your Tarde Has Been initiated  successfully..',
'alert-type' => 'success' );
return redirect()->route('dashboard')->with($notification);
}


}



















}
