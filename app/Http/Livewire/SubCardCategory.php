<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subcard;
use App\Models\Card;
class SubCardCategory extends Component
{
    public $card;
    public $subcard;
    public $card_id;
    public $name;
    public $rate;
    public $updateMode = false;
    public function render()
    {
       
        $this->card = Card::orderBy('name', 'DESC')->get();
        
        $this->subcard = SubCard::orderBy('name', 'DESC')->get();
        return view('livewire.sub-card-category');
    }


    public function AdminSubCardCategory(){
        return view('backend.cards.subcard-category');
    }
//reset input
private function resetInput(){
    $this->card_id = '';
    $this->name = '';
    $this->rate = '';
}

//submit form subcategory
public function submit(){
    $this->validate([
        'card_id'=>'required',
        'name'=>'required|min:3',
        'rate'=>'required',
    ]);
 
    if(SubCard::where('name', $this->name)->exists()){
        $this->dispatchBrowserEvent('alert', 
        ['type' => 'error',  'message' => 'SubCategory Already Exist!']);

 }
       else {
           
       
         SubCard::create([
             'card_id'=>$this->card_id,
            'name' => $this->name,
            'rate'=>$this->rate,
           ]);
           
           $this->dispatchBrowserEvent('alert', 
           ['type' => 'success',  'message' => 'SubCartegory Added Successfully!']);

           $this->resetInput();
        }
}

//edit form
public function edit($id)
{
    $sub = SubCard::findOrFail($id);
    $this->subcard_id = $id;
    $this->card_id = $sub->card_id;
    $this->name = $sub->name;
    $this->rate = $sub->rate;

    $this->updateMode = true;
}

//update form
public function update()
{
    $validatedDate = $this->validate([
        'card_id' => 'required',
        'name' => 'required',
        'rate' => 'required',
    ]);

    $post = SubCard::find($this->subcard_id);
    $post->update([
        'card_id' => $this->card_id,
        'name' => $this->name,
        'rate' => $this->rate,
    ]);

    $this->updateMode = false;

    $this->dispatchBrowserEvent('alert', 
           ['type' => 'success',  'message' => 'SubCartigory Updated Successfully!']);

    $this->resetInput();
}

//delete subcategory
public function delete($id){
    SubCard::findOrFail($id)->delete();
    $this->dispatchBrowserEvent('alert', 
           ['type' => 'success',  'message' => 'SubCartigory Delete Successfully!']);
}


//make best
public function yesBest($id){
    Subcard::findOrFail($id)->update([
        'is_best'=>1,
    ]);
    $this->dispatchBrowserEvent('alert', 
           ['type' => 'success',  'message' => 'Best Trated Activated']);
}

//make best
public function NoBest($id){
    Subcard::findOrFail($id)->update([
        'is_best'=>0,
    ]);
    $this->dispatchBrowserEvent('alert', 
           ['type' => 'error',  'message' => 'Best Traded Deactivated']);
}












}
