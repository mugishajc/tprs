<?php
namespace App\Http\Controllers;
use App\Motari;
use Auth;
use Validator;
use App\LostDevices;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class LostdevicesController extends Controller
{
    //
    public function view(){
        
        return view('dashboard.lostdevices');
    }


    public function addlost(Request $request){

        $request->validate([
           'plate_number' => 'required|min:6',
           'driver_names' => 'required',
           'imei1' => 'required',
           'phone_number'=>'required|min:10|max:13',
           'serial_number' => 'required|min:15',
           'description' => 'required',
       ]);       

       $user_id=auth()->user()->id;
       $fname=auth()->user()->firstname;
         $lname=auth()->user()->lastname;
                 $rib = new LostDevices([
                      'user_id'    =>$user_id,
                      'doneby'    =>$fname.' '.$lname,
                      'plate_number'  =>  $request->get('plate_number'),
                      'driver_names'         =>  $request->get('driver_names'),
                      'imei1'  =>  $request->get('imei1'),
                      'phone_number'    =>$request->get('phone_number'),
                      'serial_number'          =>  $request->get('serial_number'),
                      'description' =>  $request->get('description'),
                      ]);
                  $rib->save(); 
   
            return redirect()->back()->with('message', 'Lost device is saved successfully !');
   
   }

public function lost(){
    $mubazi=LostDevices::get()->all();
    
    return view('dashboard.ViewLost')->with('lost',$mubazi);
}
public function destroymessage($id) {
    DB::delete('delete from lost_devices where id = ?',[$id]);
    return redirect()->back()->with('message', 'Lost Device is deleted successfully !');
  
    }

    public function searchmoto(){
        
        return view('auth.verification');
    }


    public function searching(Request $request){

        // $r->validate([
        //     'searchPhrase' => 'required|min:3',
        // ]);       
            $input=$request['searchPhrase'];
            $result=Motari::where('PLATE_NUMBER','=',$input)
                ->orWhere('ID_NUMBER','=',$input)
                ->orWhere('Ref_Number','=',$input)
                
                ->first();
    
       if ($result){
           return redirect()->back()->with('message', "This Motocyclist is registered at Pascalmoto! \n With Name of ".$result->NAMES." \n Mubazi : YES");
    
       }else{
           return redirect()->back()->with('message', "This Motocyclist is  Not registered at Pascalmoto! \n Mubazi : No");

    
       }
    

    }

}
