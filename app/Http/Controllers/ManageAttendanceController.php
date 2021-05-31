<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageAttendanceController extends Controller
{
    //
    
    public function attend(){
        return view('dashboard.attendance');
    
    }
}
