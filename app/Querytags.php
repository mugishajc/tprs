<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Querytags extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','query_tag','description' ];
   
        public function User()
        {
            return $this->belongsTo('App\User');
        }

}
