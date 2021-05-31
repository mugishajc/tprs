<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tasks;
use App\Calls;
use Session;
use App\Platenumbers;
class HomeController extends Controller
{
 
 public function dashboard_panel(){

    $users = User::all()->toArray();

    $countjob=Tasks::all()->count();

    
    $countcall=Calls::all()->count();
    
    $countpulake=Platenumbers::all()->count();
    
    return view('dashboard.Main')
    ->with('alljob',$countjob)
    ->with('callu',$countcall)
    ->with('plate',$countpulake)
    ;
  }



  public function logoutadmin(Request $request){
         //dd('logout');
    auth()->logout();
    
    header("cache-Control: no-store, no-cache, must-revalidate");
    header("cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    Session::flush();
    $request->session()->regenerate();

    return view('auth.login')->with('message','Logged out successfully');
 }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.index');
    }



  }
