<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function OrderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
