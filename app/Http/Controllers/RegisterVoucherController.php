<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use App\Vouchers;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterVoucherController extends Controller
{
    //
    public function createvoucher(){
        return view('dashboard.makevoucher');
    
    }
    
    public function managevoucher(){
         $vouch=Vouchers::get()->all();
         return view('dashboard.managevouchers')->with('vouch',$vouch);
     
        }
    

        public function addvoucher(Request $request){

            $request->validate([
               'names' => 'required',
               'phone_number' => 'required',
               'date' => 'required',
               'amount' => 'required',
               'description' => 'required'
           ]);       
    
           $user_id=auth()->user()->id;
           $fname=auth()->user()->firstname;
             $lname=auth()->user()->lastname;
                     $voucher = new Vouchers([
                          'user_id'    =>$user_id,
                          'doneby'    =>$fname.'  '.$lname,
                          'names'  =>  $request->get('names'),
                          'phone_number'  =>  $request->get('phone_number'),
                          'date'  =>  $request->get('date'),
                          'amount'  =>  $request->get('amount'),
                          'description'  =>  $request->get('description'),
                          'verification_status'  =>'not_verified',
                          'approval_status' =>'not_approved',
                          'verification_signature'=>'null',
                          'approval_signature'=>'null',
                          'verified_by'=>'null',
                          'approved_by'=>'null',
                          'voucher_status'=>'pending',
                          'employee_approval'=>'null',
                          'staff_verified_at'=>'null',
                          'staff_approved_at'=>'null',
                          'employee_approved_at'=>'null'

                          ]);
                      $voucher->save(); 
       
                return redirect()->back()->with('message', $request->get('names').'  Voucher is generated successfully !');
       
       }
    

       public function showvoca($id) {
 
        $v = DB::select('select * from vouchers where id = ?',[$id]);
        return view('dashboard.ViewVoucher',['voca'=>$v]);
        }




}
