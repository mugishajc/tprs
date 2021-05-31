<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platenumbers extends Model
{

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','doneby','plate_number','vehicle_make','vehicle_type','chassis_number' ];
   
        public function User()
        {
            return $this->belongsTo('App\User');
        }
}
