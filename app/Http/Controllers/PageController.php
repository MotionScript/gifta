<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageCat;
use App\Models\Page;
use Carbon\Carbon;

class PageController extends Controller
{
    //page
public function AdminPage(){
    $pages = PageCat::all();
    return view('backend.pages.pages', compact('pages'));
}

//store page
public function AdminPageStore(Request $request){
   $pagecat_id = PageCat::insertGetId([
        'name' => $request->name,
        'slug' => strtolower(str_replace(' ', '-',$request->name)),
        'created_at' => Carbon::now(),
   ]);

   Page::insert([
       'pagecat_id' => $pagecat_id,
       'name'=> $request->name,
       'slug'  => strtolower(str_replace(' ', '-',$request->name)),
       'created_at' => Carbon::now(),

   ]);
   $notification = array(
    'message' => 'Page Added successfully',
    'alert-type' => 'success' );
    return redirect()->back()->with($notification);
}

//edit page
public function AdminPageEdit($id){
    $page = Page::where('pagecat_id', $id)->first();

        return view('backend.pages.edit_page', compact('page'));

}


//update page
public function AdminPageUpdate(Request $request){

    $id = $request->id;
    Page::where('id', $id)->update([
        'body'=>$request->body,
        'updated_at' => Carbon::now(),

]);

    $notification = array(
        'message' => 'Page Updated successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}












//delete page
public function AdminPageDelete($id){
    Page::where('pagecat_id', $id)->delete();
    PageCat::findOrFail($id)->delete();


    $notification = array(
        'message' => 'Page Deleted successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);
}

//user page
public function UserPage($slug){
    $page = Page::where('slug', $slug)->first();
    return view('frontend.pages.page', compact('page'));
}

















}
