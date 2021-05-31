<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','task_name','plate_number','owner_names','owner_telephone','driver_names','driver_telephone','job_status' ];
   
        public function User()
        {
            return $this->belongsTo('App\User');
        }
}
