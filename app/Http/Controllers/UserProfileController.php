<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function index($username)
    {

        $users = DB::select("select * from users where username = ?", array($username));

        //dump($users);
        if (!$users) {
            //echo "Damn, it seems there is no the user named ".$username;
            abort(404);
        } else {
            //return "Hello ".$username;
            return view("profile");
        }


        //return view("board", ["threads" => $threads]);
    }
}
