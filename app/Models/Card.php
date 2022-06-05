<?php

namespace App\Models;

use App\Models\Backend\Trade;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subcard()
    {
        return $this->hasOne(SubCard::class);
    }

    public function trade()
    {
        return $this->hasOne(Trade::class);
    }
}
