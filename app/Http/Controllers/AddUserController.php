<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Hash;


class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
    }


    public function adduser(Request $request){

     $this->validate($request, [
            
            'firstname'    =>  'required',
            'lastname'     =>  'required',
            'email'     =>  'required|email|unique:users',
            'password'     =>  'required|alphaNum|min:3',
            'phone_number' => 'required|same:password',
            'usertype'     =>  'required',
                
            ]);
    
    
            $user = new User([
                'firstname'    =>  $request->get('firstname'),
                'lastname'    =>  $request->get('lastname'),
                'email'     =>  $request->get('email'),
                'phone_number'     =>  $request->get('phone_number'),
                'usertype'     =>  $request->get('usertype'),
                'level'     =>  '1',
                'password'     =>  Hash::make($request->get('password'))
                ]);
            $user->save(); 
            return redirect()->route('registeruser');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
