<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    //User names list
    public function index()
    {
        return "Bu users name list yani ro'yhati";
    }

    public function show(Request $request, $user)
    {
        dd($request->ip());
        


        $user += 1000;
        // return "This is name list yani userslar = " . $user;
        return view('user.show')->with([
            'name' => 'PHP Develomport',
            'id' => $user
        ]);
    }

    public function createUser()
    {
        return view('user.crete');
    }


    public function store(Request $request){
        dd($request->input('name'));
    }
    public function edit($user_id){
        return "<h1>". $user_id . " ni o'zgartirish.</h1>";
    }
}
