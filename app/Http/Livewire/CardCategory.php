<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Card;
use App\Models\Subcard;
use Livewire\Component;

class CardCategory extends Component
{
    public $name;
    public $cards;



    




public function AdminCategoryPage(){
    return view('backend.cards.card_category');
}


//submit form category
public function submit(){
    $this->validate([
        'name'=>'required|min:3',
    ]);
    if(Card::where('name', $this->name)->exists()){

       

       
       
               
    
    
       }
       else {
           
       
         Card::create([
            'name' => $this->name,
           ]);
           $this->dispatchBrowserEvent('alert', 
           ['type' => 'success',  'message' => 'Cartigory Added Successfully!']);

           
        }
       
}

public function render()
    {
        $this->cards= Card::orderBy('name', 'DESC')->get();
        return view('livewire.card-category');
    }


//delete card category
public function delete($delete){
    Card::where('id', $delete)->delete();
    SubCard::where('card_id', $delete)->delete();
    $this->dispatchBrowserEvent('alert', 
    ['type' => 'success',  'message' => 'Card Deleted Successfully!']);

    

}







}
