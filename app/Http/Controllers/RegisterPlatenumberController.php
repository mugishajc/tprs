<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use App\Platenumbers;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterPlatenumberController extends Controller
{
    
    public function addplatenumber(){
        return view('dashboard.createplatenumber');

    }
    public function createplatenumber(Request $request){

        $request->validate([
           'plate_number' => 'required|unique:platenumbers',
           'vehicle_make' => 'required',
           'vehicle_type' => 'required',
           'chassis_number' => 'required|unique:platenumbers',
       ]);       

       $user_id=auth()->user()->id;
       $names=auth()->user()->firstname.auth()->user()->lastname;;
                 $platenumbers = new Platenumbers([
                      'user_id'    =>$user_id,
                      'doneby'    =>$names,
                      'plate_number'  =>  $request->get('plate_number'),
                      'vehicle_make'         =>  $request->get('vehicle_make'),
                      'vehicle_type'  =>  $request->get('vehicle_type'),
                      'chassis_number'    =>$request->get('chassis_number'),
                      ]);
                  $platenumbers->save(); 
   
            return redirect()->back()->with('message', 'Plate number is saved successfully !');
   
   }
   public function viewplatenumbers(){
    $pulake=Platenumbers::get()->all();
    return view('dashboard.viewplatenumber')->with('platenumbers',$pulake);

}

public function destroyplatenumber($id) {
    DB::delete('delete from platenumbers where id = ?',[$id]);
    return redirect()->back()->with('message', 'Plate number  is deleted successfully !');
  
    }


}
