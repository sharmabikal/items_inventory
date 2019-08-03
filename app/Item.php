<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
