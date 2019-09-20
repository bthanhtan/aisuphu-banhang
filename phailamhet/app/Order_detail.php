<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
            $table->string('order_id');
            protected $fillable = ['product_id','detail','quatity','until_price',];
    public function order()
    {
    	return $this->belongTo('App\Order');
    }
}
