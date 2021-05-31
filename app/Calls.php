<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calls extends Model
{
    //
    //
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','doneby','plate_number','names','phone_number','technician','date','query_tag', 'issue_description',
    ];
    public function User()
    {
        return $this->belongsTo('App\User');
    }

}
