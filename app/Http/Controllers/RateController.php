<?php

namespace App\Http\Controllers;

use App\Models\SubCard;
use Illuminate\Http\Request;

class RateController extends Controller
{
    //card subcategory
    public function GetSubCategory($category_id){
        $subcat = SubCard::where('card_id', $category_id)->get();
    return json_encode($subcat);
    }
    
}
