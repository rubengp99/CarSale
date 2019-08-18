<?php

namespace CarSale\Http\Controllers;
use CarSale\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
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
        $query = DB::table('users')->where('username', $request->input("username"))->get();
        $query2 = DB::table('users')->where('email', $request->input("email"))->get();
        if(count($query) === 0 && count($query2) === 0){
            $Users = new User();
            $Users ->name = $request->input("name");
            $Users ->username = $request->input("username");
            $Users ->email = $request->input("email");
            $Users ->password = bcrypt($request->input("password"));
            $Users -> save();
        }else{
            if(count($query) > 0){
                $text ='This username is already taken. Please try with another.';
            }else if(count($query2) > 0){
                $text = 'This email is already in use. Please try with another.';
            }
            return response()->json([$text], 401) ;

        }

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
