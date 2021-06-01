<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motari extends Model
{
    protected $table = "motari";
    protected $fillable = [
        'NAMES','COOPERATIVE','Ref_Number','AMOUNTRWF','ID_NUMBER','AC_NUMBER','PLATE_NUMBER','VILLAGE','CELL','SECTOR','TELEPHONE','DEVICE_IMEI',
    ];
}
