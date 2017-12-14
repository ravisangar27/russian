<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * A Note belongs to a card.
     */
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
