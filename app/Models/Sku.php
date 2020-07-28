<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    public function product(){
        return $this->belongsTo('App\Models\Inventory');
    }
}
