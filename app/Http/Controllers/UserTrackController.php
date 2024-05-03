<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTrackController extends Controller
{
    public function registrate(){
        dump($_POST);
        $supposedUsrName = request()->get('usrname');
        $pswd1 = request()->get('pswd1');
        $pswd2 = request()->get('pswd2');
        dump($supposedUsrName);

        $users = DB::select("select * from users where username = ?", array($supposedUsrName));
        echo 'User IP - '.$_SERVER['REMOTE_ADDR']."</br>";

        //dump($users);
        if(!$users){
            
            if (empty($pswd1) || empty($pswd2) || $pswd1 == "" || $pswd2 == "") {
                echo "Passwords are empty!";
                return;
            }
            if (!ctype_alnum($pswd1) || !ctype_alnum($pswd2)) {
                echo "Passwords have special characters!";
                return;
            }
            if ($pswd1 !== $pswd2) {
                echo "Your passwords are not the same!";
                return;
            }
            if (strlen($pswd1)>24) {
                echo "Bad, your password is too long!";
                return;
            }
            if (strlen($pswd1)<8) {
                echo "Bad, your password is too short!";
                return;
            }

            echo "Your password is good!";
            return redirect()->route('home')->with('registration-success', 'You have successfully registrated. Congrats!');
            
            
            
            


            
            
        }
        else {
            echo "User with the $supposedUsrName nickname already exists, </br> please consider changing it";
        }

        
    }
}
