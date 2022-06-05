<?php

namespace App\Http\Livewire;

use App\Models\HomePage\FirstSection;
use Livewire\Component;

class FSection extends Component
{
    public $data;
    public function render()
    {
        $this->data = FirstSection::find(1);
        return view('livewire.f-section');
    }
















}
