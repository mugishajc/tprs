<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Querytags;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class RegisterTagController extends Controller
{
    //

    public function createtag(){
    $tags=Querytags::get()->all();

        return view('dashboard.addquerytag')->with('tags',$tags);
    
    }

    public function services(){
            return view('dashboard.services');
        
        }

        
    public function addquerytag(Request $request){

        $request->validate([
           'query_tag' => 'required|unique:querytags',
           'description' => 'required'
       ]);       

       $user_id=auth()->user()->id;
                 $query = new Querytags([
                      'user_id'    =>$user_id,
                      'query_tag'  =>  $request->get('query_tag'),
                      'description'  =>  $request->get('description')
                      ]);
                  $query->save(); 
   
            return redirect()->back()->with('message', 'Tag is created successfully !');
   
   }

}
