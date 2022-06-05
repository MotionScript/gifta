<?php

namespace App\Http\Livewire;

use App\Models\Currency;
use Livewire\Component;

class CurrencyList extends Component
{
    public $currency;
    public $name, $code, $symbol;
    public function render()
    {
        $this->currency = Currency::all();
        return view('livewire.currency-list');
    }
//currency page
public function CurrencyPage(){
    return view('backend.currency.currency_view');
}

public function updated($field){
    $this->validateOnly($field,[
        'name'=>'required|min:3',
        'code' => 'required',
        'symbol' => 'required',
    ]);
}



public function AddCurrency(){

    $this->validate([
        'name'=>'required|min:3',
        'code' => 'required',
        'symbol' => 'required'
   ]);
   //submit to db

if(Currency::where('name', $this->name)->exists()){
    $this->dispatchBrowserEvent('alert', 
    ['type' => 'error',  'message' => 'Currency Name Already Exist']);
       


}else{
      
    Currency::create([
        'name' => $this->name,
        'code' => $this->code,
        'symbol' => $this->symbol,
    ]);
 
    $this->dispatchBrowserEvent('alert', 
    ['type' => 'success',  'message' => 'Currency Added Successfully']);
    $this->resetInput();



}

}
//delete currency
public function delete($id){
    Currency::findOrFail($id)->delete();
    $this->dispatchBrowserEvent('alert', 
    ['type' => 'success',  'message' => 'Currency Deleted Successfully']);

}


//reset input
public function resetInput(){
    $this->name = "";
    $this->code = "";
    $this->symbol= "";
}

//make default currency
public function Yes($id){
    Currency::findOrFail($id)->update([
        'status' => 1,
    ]);
    $this->dispatchBrowserEvent('alert', 
    ['type' => 'success',  'message' => 'Enabled']);
}

//No make default currency
public function No($id){
    Currency::findOrFail($id)->update([
        'status' => 0,
    ]);
    $this->dispatchBrowserEvent('alert', 
    ['type' => 'error',  'message' => 'Disabled']);
}




}
