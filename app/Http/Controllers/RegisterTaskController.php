<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use App\Tasks;
use App\Querytags;
use App\Platenumbers;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterTaskController extends Controller
{
    
    //
    public function addtask(){
        $plate = Platenumbers::all(['id','plate_number']);
 
        $tags = Querytags::all(['id','description']);
        return view('dashboard.createtask',compact('tags'))->with('plate',$plate);
    
    }
    public function createtask(Request $request){

        $request->validate([
           'task_name' => 'required',
           'plate_number' => 'required',
           'owner_names' => 'required',
           'owner_telephone' => 'required',
           'driver_names' => 'required',
           'driver_telephone' => 'required',
       ]);       

       $user_id=auth()->user()->id;
                 $tasks = new Tasks([
                      'user_id'    =>$user_id,
                      'task_name'  =>  $request->get('task_name'),
                      'plate_number'         =>  $request->get('plate_number'),
                      'owner_names'  =>  $request->get('owner_names'),
                      'owner_telephone'    =>$request->get('owner_telephone'),
                      'driver_names'    =>$request->get('driver_names'),
                      'driver_telephone'    =>$request->get('driver_telephone'),
                      'job_status'=>'Pending',
                      ]);
                  $tasks->save(); 
   
            return redirect()->back()->with('message', 'New Job has been created successfully !');
   
   }



   public function viewtasks(){
    $akazi=Tasks::get()->all();
    return view('dashboard.managetask')->with('tasks',$akazi);

}

public function destroytask($id) {
    DB::delete('delete from tasks where id = ?',[$id]);
    return redirect()->back()->with('message', 'Job is deleted successfully !');
  
    }

    public function showtask($id) {
 
        $tasks = DB::select('select * from tasks where id = ?',[$id]);
        return view('dashboard.Updatejob',['tasks'=>$tasks]);
        }
    

}
