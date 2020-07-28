<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public function sku(){
        return $this->belongsTo('App\Models\Sku');
    }
}
