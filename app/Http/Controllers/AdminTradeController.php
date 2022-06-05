<?php

namespace App\Http\Controllers;

use App\Mail\NotifyUser;
use App\Models\AdminWallet;
use App\Models\Backend\MultiImage;
use App\Models\Backend\Trade;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class AdminTradeController extends Controller
{
    //unpaid card

public function AdminViewCardUnpaid(){
    $unpaid = Trade::where('status', 0)->orderBy('id', 'DESC')->get();
    return view('backend.trades.cards.unpaid', compact('unpaid'));
}
//admin view unpaid card details
public function AdminViewCardUnpaidDetails($id){
    $card = Trade::findOrFail($id);
   $images = MultiImage::where('trade_id', $id)->get();
    return view('backend.trades.cards.unpaid_details', compact('card', 'images'));
}

//admin cridit user
public function AdminCreditUser($id){
  $img =  MultiImage::where('trade_id', $id)->first();
  unlink($img->images);
  MultiImage::where('trade_id', $id)->delete();
  $trade = Trade::findOrFail($id);
  $payamount = $trade->pay;
  $type = $trade->type;
  $u = User::where('id', $trade->user_id)->first();

  Trade::where('id', $id)->update([
       'status' => 1,
       'created_at' => Carbon::now(),
  ]);

  $data = [
      'email' => $u->email,
      'amount' => $payamount,
      'name' => $u->name,
      'type' => $type,
  ];

Mail::to($u->email)->send(new NotifyUser($data));



  $notification = array(
    'message' => 'Trade Completed   successfully..',
    'alert-type' => 'success' );
    return redirect()->route('card-unpaid')->with($notification);
}

//admin view card paid
public function AdminCardPaid(){
    $trades = Trade::where('status', 1)->orderBy('created_at', 'DESC')->get();
    return view('backend.trades.cards.paid', compact('trades'));
}

//admin wallet
public function AdminWallet(){
    $wallet = AdminWallet::find(1);
    return view('admin.wallet', compact('wallet'));
}

//update admin wallet
public function AdminWalletUpdate(Request $request){
    $id = $request->id;
    AdminWallet::findOrFail($id)->update([
         'btc_address' => $request->btc_address,
         'btc_rate' => $request->btc_rate,
         'usdt_address' => $request->usdt_address,
         'usdt_rate' => $request->usdt_rate,
    ]);
    $notification = array(
        'message' => 'Wallet Update   successfully..',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}























}
