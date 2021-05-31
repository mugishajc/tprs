<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simcards extends Model
{
    
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','doneby','telco','serial_number','plate_number','phone_number','puk','status' ];
   
        public function User()
        {
            return $this->belongsTo('App\User');
        }
}
