<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table='order_detail';
    protected $primaryKey = 'id_order_detail';
    public $timestamps = false;
}
