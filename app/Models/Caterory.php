<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caterory extends Model
{
    use HasFactory;
    protected $table='caterory';
    protected $primaryKey = 'id_caterory';
    public $timestamps = false;
}
