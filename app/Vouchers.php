<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vouchers extends Model
{
    /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = [
    'user_id','doneby','names','phone_number'
    ,'date','amount','description'
    ,'verification_status'
    ,'approval_status'
    ,'verification_signature'
    ,'approval_signature'
    ,'verified_by','approved_by'
    ,'voucher_status'
    ,'employee_approval'
    ,'staff_verified_at'
    ,'staff_approved_at'
    ,'employee_approved_at' ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
