<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use App\Notifications;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterNotificationController extends Controller
{
    //
    public function notification(){
        $ubutumwa=Notifications::get()->all();

        return view('dashboard.makenotification')->with('ubutumwa',$ubutumwa);
    
    }

    public function destroymessage($id) {
        DB::delete('delete from notifications where id = ?',[$id]);
        return redirect()->back()->with('message', 'Message is deleted successfully !!!');
      
        }

    
    public function notify(Request $request){

        $request->validate([
           'title' => 'required|unique:notifications',
           'body' => 'required',
       ]);       

       $user_id=auth()->user()->id;
       $fname=auth()->user()->firstname;
       $lname=auth()->user()->lastname;

       
        $image = $request->file('file');
       $name = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('Backend\PostFiles');
       $image->move($destinationPath, $name);  
       
       $mail = new Notifications([
                      'user_id'    =>$user_id,
                      'uploadedby'  =>$fname. ' ' .$lname,
                      'title'  =>  $request->get('title'),
                      'body'  =>  $request->get('body'),
                      'file'  =>  $name,
                      'reactions'  =>  '0',
                      ]);
                  $mail->save(); 
   
            return redirect()->back()->with('message', $request->get('title').' is posted ,successfully !!!');
       }   
   
public function showmessages(){
    
$var=Notifications::orderBy('created_at')->get();
    return view('dashboard.Messages')->with('mail',$var);

}
    
}
