<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingHome extends Model
{
    use HasFactory;
    protected $table='setting_home';
    protected $primaryKey = 'id_setting_home';
    public $timestamps = false;
}
