<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $attributes = [
        'status' => 'pending',
    ];
}
