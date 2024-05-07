<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function index($username)
    {

        //$users = DB::select("select * from users where username = ?", array($username));


        //dump($users);
        if (!$this->userExists($username)) {
            abort(404);
        } 
        
        $profile = $this->getProfileInfo($username);

        return view("profile", ['profile' => $profile]);


        //return view("board", ["threads" => $threads]);
    }

    public static function userExists($username)
    {
        if (!DB::select("select * from profile_info where displayname = ?", array($username))) {
            echo "yoyo, threadcontrolller exists";
            return false;
        }
        return true;
    }

    public static function getProfileInfo($username)
    {
        $profileinfo = DB::select("select profile_info.* from profile_info where displayname=?", array($username));
        if (!$profileinfo) {
            echo "this user doesn't have any info";
            return [];
        }
        return $profileinfo;
    }
}
