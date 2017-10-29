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
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
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

}
