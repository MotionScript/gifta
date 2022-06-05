<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminTradeController;
use App\Http\Controllers\Backend\SectionController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\TradeController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Livewire\CardCategory;
use App\Http\Livewire\CurrencyList;
use App\Http\Livewire\AdminLiveWire;
use App\Http\Livewire\FSection;
use App\Http\Livewire\Settings;
use App\Http\Livewire\SubCardCategory;
use App\Models\Backend\SiteSettings;

//===================ALL ADMIN ROUTES=====================================
Route::prefix('admin')->group(function(){

    //admin login route
    Route::get('/login', [AdminController::class, 'Index'])->name('login_form');
    //admin login owner
    Route::post('/login/owner', [AdminController::class, 'AdminLogin'])->name('admin_login');
    //admin login route
    Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin_dashboard')->
    middleware('admin');

//admin view users
Route::get('/view/users', [AdminController::class, 'AdminViewUsers'])->name('site-users')->
    middleware('admin');

    //admin view users details
Route::get('/view/{user}', [AdminController::class, 'AdminViewUsersDetails'])->name('user-details')->
middleware('admin');

//admin delete user
Route::get('/user/{id}', [AdminController::class, 'AdminDeleteUser'])->name('delete-user')->
middleware('admin');

//card category
Route::get('/card-category', [CardCategory::class, 'AdminCategoryPage'])->name('card-category')->
middleware('admin');

//sub card category
Route::get('/subcard-category', [SubCardCategory::class, 'AdminSubCardCategory'])->name('sub-card-category')->
middleware('admin');
//-----------------------------------------ADMIN PROFILE-----------------------------------------------------
//admin profile page

Route::get('/profile', [AdminLiveWire::class, 'AdminProfile'])->name('admin-profile')->
middleware('admin');



//admin update pics
Route::post('/update/pics/{id}', [AdminController::class, 'AdminUpdatePics'])->name('admin-update-pics')->
middleware('admin');


//admin view all admin users
Route::get('/users/admin', [AdminController::class, 'AdminUsers'])->name('admin-users')->
middleware('admin');
//admin view all admin users
Route::post('/users/admin/store', [AdminController::class, 'AdminUsersStore'])->name('add-admin-user')->
middleware('admin');

//admin edit  admin users role
Route::get('/users/admin/edit/{id}', [AdminController::class, 'AdminUsersEdit'])->name('edit-admin-user')->
middleware('admin');

//admin delete  admin users
Route::get('/users/admin/delete/{id}', [AdminController::class, 'AdminUsersDelete'])->name('delete-admin-user')->
middleware('admin');


//admin update  admin users role
Route::post('/users/admin/update/{id}', [AdminController::class, 'AdminUsersUpdate'])->name('update-admin-user')->
middleware('admin');

});
//===========================END ADMIN ALL ROUTES===================================





//=================================ADMIN UPDATE HOMEPAGE SECTIONS=======================================
//firstsection
Route::prefix('section')->group(function(){
    //first section
    Route::get('/first', [SectionController::class, 'FirstSection'] )->name('first-section')->
    middleware('admin');
//first section update
Route::post('/first/update', [SectionController::class, 'FirstSectionUpdate'] )->name('update-first');



 //secondsection
    Route::get('/second', [SectionController::class, 'SecondSection'] )->name('second-section')->
    middleware('admin');
//post second section
Route::post('/second/add', [SectionController::class, 'AddSecond'] )->name('add-second');
//delete second image
Route::get('/second/{id}', [SectionController::class, 'AddSecondDelete'] )->name('delete-i');


 //thirdsection
 Route::get('/third', [SectionController::class, 'ThirdSection'] )->name('third-section')->
 middleware('admin');
 //update third section
 Route::post('/third/update', [SectionController::class, 'UpdateThird'] )->name('update-third');



 //testimony page
 Route::get('/testimony', [SectionController::class, 'Testimony'] )->name('testimony')->
 middleware('admin');
 //store testimony
 Route::post('/testimony/add', [SectionController::class, 'AddTesti'] )->name('post-testi');


 //delete testimony
 Route::get('/testimony/delete/{id}', [SectionController::class, 'DeleteTesti'] )->name('delete-testi');

 //first section
 Route::get('/currency', [ CurrencyList::class, 'CurrencyPage'] )->name('currency')->
 middleware('admin');

  //why us section
  Route::get('/why-us', [SectionController::class, 'Why_Us'] )->name('why-us')->
  middleware('admin');

  //why us store section
  Route::post('/why-us/store', [SectionController::class, 'Why_UsStore'] )->name('post-why-us')->
  middleware('admin');

  //why us delete section
  Route::get('/why-us/delete/{id}', [SectionController::class, 'Why_UsDelete'] )->name('delete-why')->
  middleware('admin');

  //why us edit section
  Route::get('/why-us/edit/{id}', [SectionController::class, 'Why_UsEdit'] )->name('edit-why')->
  middleware('admin');

  //why us edit section
  Route::post('/why-us/update/{id}', [SectionController::class, 'Why_UsUpdate'] )->name('update-why-us')->
  middleware('admin');


//faq section
Route::get('/faq', [SectionController::class, 'FAQ'] )->name('faq')->
middleware('admin');


//faq section store
Route::post('/faq/store', [SectionController::class, 'FAQStore'] )->name('post-faq')->
middleware('admin');

//faq section delete
Route::get('/faq/delete/{id}', [SectionController::class, 'FAQDelete'] )->name('delete-faq')->
middleware('admin');

//faq section edit
Route::get('/faq/edit/{id}', [SectionController::class, 'FAQEdit'] )->name('edit-faq')->
middleware('admin');

//faq section update
Route::post('/faq/update/{id}', [SectionController::class, 'FAQUpdate'] )->name('update-faq')->
middleware('admin');


});













//========================================END ADMIN UPDATE HOME PAGE SECTIONS============================================






//===========================RATE CALCULATOR ALL ROUTES====================
//get sub card categories
//AJAX URL TO GET SUBCATEGORY OF MAIN CATEGORY IN DB
Route::get('/category/subcategory/ajax/{category_id}', [RateController::class, 'GetSubCategory']);


//=================================END RATE CALCULATER ALL ROUTES===================


//=========================SETTINGS ALL ROUTES=================================

Route::prefix('settings')->group(function(){
   Route::get('/site', [ SettingsController::class, 'SiteSettings'])->name('site-settings')->
   middleware('admin');
//update site\
Route::post('/site/update{id}', [ SettingsController::class, 'SiteSettingsUpdate'])->name('site-update')->
   middleware('admin');

//update site logos
Route::post('/logo/update/{id}', [ SettingsController::class, 'SiteLogosUpdate'])->name('update-logo')->
   middleware('admin');

//seo page
Route::get('/seo', [ SettingsController::class, 'SEO'])->name('seo-setting')->
   middleware('admin');

//seo  update page
Route::post('/seo/update/{id}', [ SettingsController::class, 'SEOUpdate'])->name('update-seo')->
   middleware('admin');

//email smtp page
Route::get('/email/smtp', [ SettingsController::class, 'EmailSMTP'])->name('email-smtp')->
   middleware('admin');

//email smtp update
Route::post('/email/smtp/update', [ SettingsController::class, 'EmailSMTPUpdate'])->name('update-email-smtp')->
   middleware('admin');







});
//===============================END SETTINGS ALL ROUTES======================================================





//=====================================ALL USER ROUTES==========================================
Route::controller(UserController::class)->group(function () {
    Route::get('/user/profile', 'Show')->name('user-profile')->middleware('auth');
    //update profile image
    Route::post('/user/profile/update/{id}', 'UpdateImage')->name('user-image-chnage')->middleware('auth');
    //update password
    Route::post('/user/change/password/{id}', 'UpdatePassword')->name('user-change-pass')->middleware('auth');
    //update profile
    Route::post('/user/update/{id}', 'UpdateProfile')->name('user-update')->middleware('auth');
    //update bank
    Route::post('/user/bank/{id}', 'UpdateBank')->name('update-bank')->middleware('auth');
     //user wallet
     Route::get('/user/bank', 'Bank')->name('user-bank')->middleware('auth');
     //transactions history
     Route::get('/user/transactions', 'Transactions')->name('user-transactions')->middleware('auth');
});




//=====================================USER TRADE ALL ROUTES==========================================
Route::controller(TradeController::class)->group(function () {
    //gift card page
Route::get('/trade/gift-card', 'GiftCard')->name('trade-gift-card')->middleware('auth');
    //store gift card
Route::post('/trade/gift-card/store', 'GiftCardStore')->name('store-gift-card')->middleware('auth');

//trade btc
Route::get('/trade/bitcoin', 'TradeBitcoin')->name('trade-btc')->middleware('auth');

//trade btc store
Route::post('/trade/bitcoin/store', 'TradeBitcoinStore')->name('store-bitcoin')->middleware('auth');

//trade usdt
Route::get('/trade/usdt', 'TradeUSDT')->name('trade-usdt')->middleware('auth');
//trade usdt store
Route::post('/trade/usdt/store', 'TradeUSDTStore')->name('store-usdt')->middleware('auth');

});
//==================================END USER AND TARDE ALL ROUTES==============================================


//========================================ADMIN VIEW TRADES ALL ROUTE===========================================
Route::controller(AdminTradeController::class)->group(function(){
   //admin view unpaid card
Route::get('/admin/card/unpaid', 'AdminViewCardUnpaid')->name('card-unpaid')->middleware('admin');
   //admin view unpaid card details
   Route::get('/admin/card/unpaid/{id}', 'AdminViewCardUnpaidDetails')->name('unpaid-details')->middleware('admin');

 //admin crdit user
 Route::get('/admin/card/credit/{id}', 'AdminCreditUser')->name('credit-now')->middleware('admin');
 //admin view card completed trade
 Route::get('/admin/card/paid', 'AdminCardPaid')->name('paid-card')->middleware('admin');

 //admin view wallet
 Route::get('/admin/wallet', 'AdminWallet')->name('admin-wallet')->middleware('admin');

//admin update wallet
Route::post('/admin/wallet/update', 'AdminWalletUpdate')->name('update-admin-wallet')->middleware('admin');







});



//========================================END ADMIN TRADES ALL ROUTES===============================================




//========================================ADMIN VIEW TRADES ALL ROUTE===========================================
Route::controller(PageController::class)->group(function(){
     Route::get('/admin/pages', 'AdminPage')->name('admin-pages')->middleware('admin');
     //page cat store
     Route::post('/admin/pages/store', 'AdminPageStore')->name('add-page')->middleware('admin');
     //page edit
     Route::get('/admin/pages/edit/{id}', 'AdminPageEdit')->name('edit-page')->middleware('admin');
 //page update
 Route::post('/admin/page/update', 'AdminPageUpdate')->name('update-admin-page')->middleware('admin');
//page delete
      Route::get('/admin/pages/delete/{id}', 'AdminPageDelete')->name('delete-page')->middleware('admin');

//----------------------------------------------------------USER VIEW PAGES-------------------------------


//page view
Route::get('/page/{slug}', 'UserPage')->name('page');
});





























































Route::get('/', function () {
    $site = SiteSettings::find(1);
    if($site->maintenance == 1){
        return view('frontend.maintenance');
    }
    else{
        return view('frontend.index');
    }
});


Route::get('/dashboard', function () {
    return view('user.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
