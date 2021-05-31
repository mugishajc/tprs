<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    
    //
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','uploadedby','title','body','file','reactions',
    ];
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
