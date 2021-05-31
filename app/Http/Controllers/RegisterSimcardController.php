<?php
namespace App\Http\Controllers;
use Auth;
use Validator;
use App\Simcards;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterSimcardController extends Controller
{
    
    public function simcard(){

        
   // $simukadi=Simcards::get()->where('status','ACTIVE')->all();

   $simukadi=Simcards::get()->all();

    return view('dashboard.simcard')->with('simcards',$simukadi);
    
    }

    public function createsimcard(Request $request){

        $request->validate([
           'telco' => 'required',
           'serial_number' => 'required|unique:simcards',
           'plate_number' => 'required|unique:simcards',
           'phone_number' => 'required|unique:simcards'
       ]);       

       $user_id=auth()->user()->id;
       
       $user_id=auth()->user()->id;
       $fname=auth()->user()->firstname;
         $lname=auth()->user()->lastname;
                 $simu = new Simcards([
                      'user_id'    =>$user_id,
                      'doneby'    =>$fname.' '.$lname,
                      'telco'  =>  $request->get('telco'),
                      'serial_number'  =>  $request->get('serial_number'),
                      'plate_number'  =>  $request->get('plate_number'),
                      'phone_number'  =>  $request->get('phone_number'),
                      'puk'  =>  $request->get('puk'),
                      'status'  =>  $request->get('status')
                      ]);
                  $simu->save(); 
   
            return redirect()->back()->with('message', 'SIMCARD is recorded successfully !');
   
   }


public function showsimcard($id) {
 
    $simcards = DB::select('select * from simcards where id = ?',[$id]);
    return view('dashboard.Editsimcard',['simcards'=>$simcards]);
    }

    public function updateinactivesimcard(Request $request,$id) {

        
        $request->validate([
            'telco' => 'required',
            'serial_number' => 'required|unique:simcards',
            'plate_number' => 'required|unique:simcards',
            'phone_number' => 'required|unique:simcards'
        ]); 

        $telco = $request->input('telco');
        $serial_number = $request->input('serial_number');
        $plate_number = $request->input('plate_number');
        $phone_number = $request->input('phone_number');
        $puk = $request->input('puk');
        $status = $request->input('status');

        DB::update('update simcards set telco = ?,serial_number=?,plate_number=?,phone_number=?,puk=?,status=? where id = ?',[$telco,$serial_number,$plate_number,$phone_number,$puk,$status,$id]);
        return redirect()->back()->with('message', 'Simcard is updated successfully !');
    }

    public function destroysimcard($id) {
        DB::delete('delete from simcards where id = ?',[$id]);
        return redirect()->back()->with('message', 'Simacard is deleted successfully !');
      
        }

}
