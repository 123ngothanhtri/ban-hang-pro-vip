<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingAdmin extends Model
{
    use HasFactory;
    protected $table='setting_admin';
    protected $primaryKey = 'id_setting_admin';
    public $timestamps = false;
}
