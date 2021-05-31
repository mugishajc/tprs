<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class RegisterUserController extends Controller
{

    public function dashboard_adduser(){

        $users = User::all()->toArray();
    
        return view('dashboard.registeruser');
      
    }    //

   public function adduser(Request $request){

     $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email|unique:users',
        'Phone_number' => 'required|min:10',
        'password' => 'required|min:3',
        'usertype' => 'required',
    ]);       

    
if($request->get('usertype') ==1 ){
    $level='Reception';
}else if($request->get('usertype') == 2){
    $level='Data entry';
}else if($request->get('usertype') == 3){
    $level='Call center';
}else{
    $level='Inventory';
}
               $user = new User([
                   'firstname'    =>  $request->get('firstname'),
                   'lastname'    =>  $request->get('lastname'),
                   'email'     =>  $request->get('email'),
                   'phone_number'     =>  $request->get('Phone_number'),
                   'usertype'     =>$level,
                   'role'     =>  $request->get('usertype'),
                   'level'=>'1',
                   'password'  =>  Hash::make($request->get('password'))
                   ]);
               $user->save(); 

         return redirect()->back()->with('message', 'Account created successfully !');

}

public function viewallusers(){
    $users=DB::select("select * from users EXCEPT select * from users where level='p@t@r@s@' ");
    return view('dashboard.manageuser')->with('users',$users);

}

public function destroyuser($id) {
    DB::delete('delete from users where id = ?',[$id]);
    return redirect()->back()->with('message', 'User is deleted successfully !');
  
    }


    public function showuser($id) {
 
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('dashboard.Updateuser',['users'=>$users]);
        }



        public function updateuser(Request $request,$id) {
 
            if($request->get('usertype') ==1 ){
                $levels='Reception';
            }else if($request->get('usertype') == 2){
                $levels='Data entry';
            }else if($request->get('usertype') == 3){
                $levels='Call center';
            }else if($request->get('usertype') == 5){
                $levels='Technician';
            }else if($request->get('usertype') == 6){
                $levels='Corporate level';
            }else{
                $levels='Inventory';
            } 
 
            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $phone_number = $request->input('phone_number');
            $password = $request->input('password');
            $usertype = $request->input('usertype');
 
            DB::update('update users set firstname = ?,lastname=?,email=?,phone_number=?,password=?,usertype=? where id = ?',[$firstname,$lastname,$email,$phone_number,$password,$levels,$id]);
            return redirect()->back()->with('message', 'User is updated successfully !');
        }

}
