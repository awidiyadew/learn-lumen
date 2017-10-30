<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function getUsers() {
        
        // select * from user
        $users = User::all();

        $res = [];

        if ($users) {
            $res['success'] = true; 
            $res['data'] = $users;
        } else {
            $res['success'] = false; 
            $res['data'] = [];
        }

        return response($res);
    }

    public function createUser(Request $request) {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        if ($user) {
            $res['success'] = true;
            $res['data'] = $user;
        } else {
            $res['success'] = false;
            $res['error'] = 'Something when wrong!';
        }

        return response($res);
    }

    public function getUser(Request $request, $id) {
        $user = User::where('id', $id)->get();
        
        if ($user) {
            $res['success'] = true;
            $res['data'] = $user;
            return response($res);
        } else {
            $res['success'] = false;
            $res['data'] = [];
            $res['error'] = 'Something when wrong!';
            return response($res);
        }
      
    }
    
}
