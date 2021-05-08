<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}
