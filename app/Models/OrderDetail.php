<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 't_orders_details';

    public function order() {
        return $this->belongsTo('App\Models\Order');
    }
}