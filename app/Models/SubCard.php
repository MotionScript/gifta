<?php

namespace App\Models;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCard extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
