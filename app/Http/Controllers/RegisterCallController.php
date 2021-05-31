<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use App\Calls;
use App\Querytags;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterCallController extends Controller
{
    //
    public function createcall(){
        
    $query = Querytags::all(['id','description']);
    
    
    $user = User::all(['id','firstname','lastname','level'])->whereIn('level',5);
    
    return view('dashboard.createcall',compact('query'))->with('user',$user);
    
    }

    

    public function addcall(Request $request){

        $request->validate([
           'plate_number' => 'required',
           'phone_number' => 'required',
           'date' => 'required',
           'query_tag' => 'required',
           'issue_description' => 'required',
       ]);       

       $user_id=auth()->user()->id;
       $fname=auth()->user()->firstname;
         $lname=auth()->user()->lastname;
                 $calls = new Calls([
                      'user_id'    =>$user_id,
                      'doneby'    =>$fname.' '.$lname,
                      'plate_number'  =>  $request->get('plate_number'),
                      'names'         =>  $request->get('names'),
                      'phone_number'  =>  $request->get('phone_number'),
                      'technician'    =>$request->get('technician'),
                      'date'          =>  $request->get('date'),
                      'query_tag'     => $request->get('query_tag'),
                      'issue_description' =>  $request->get('issue_description'),
                      ]);
                  $calls->save(); 
   
            return redirect()->back()->with('message', 'Call is saved successfully !');
   
   }


   public function viewallcalls(){
    $calls=Calls::get()->all();
    
     return view('dashboard.managecalls')->with('calls',$calls);

    }


    public function destroycall($id) {
        DB::delete('delete from calls where id = ?',[$id]);
        return redirect()->back()->with('message', 'call is deleted successfully !');
      
        }


        public function showcalls($id) {
 
            $calls = DB::select('select * from calls where id = ?',[$id]);


            $query = Querytags::all(['id','description']);
    
    
            $user = User::all(['id','firstname','lastname','level'])->whereIn('level',5);
            
            return view('dashboard.Updatecall',compact('query'))->with('user',$user)->with('calls',$calls);

            
        }


        public function updatecall(Request $request,$id) {

            
        $request->validate([
            'plate_number' => 'required',
            'phone_number' => 'required',
            'date' => 'required|unique:calls',
            'query_tag' => 'required',
            'issue_description' => 'required',
        ]);       

            $plate_number = $request->input('plate_number');
            $phone_number = $request->input('phone_number');
            $names = $request->input('names');
            $technician = $request->input('technician');
            $date = $request->input('date');
            $query_tag = $request->input('query_tag');
            $issue_description = $request->input('issue_description');
    
            DB::update('update calls set plate_number = ?,phone_number=?,names=?,technician=?,date=?,query_tag=?,issue_description=? where id = ?',[$plate_number,$phone_number,$names,$technician,$date,$query_tag,$issue_description,$id]);
            return redirect()->back()->with('message', 'Call is updated successfully !');
        }
    

}
