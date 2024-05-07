<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\ThreadController;

class PostController extends Controller
{
    public function createPost(){
        $res = request()->get('posttextarea');
        echo "$res</br>";
        $prev_url = url()->previous();
        

       
        
        
        $parts = explode('/', $prev_url);
        $cut_words = array_slice($parts, -2, 2);
        
        print_r($cut_words);
        

        if(Auth::check()){
            if($cut_words[0] == "thread"){
                if(ThreadController::threadExists($cut_words[1])){
                    DB::insert("insert into posts (posttext, postedbyuserid_fk, threadid_fk, postdate) values(?, ?, ?, ?)", [$res, Auth::user()->userid, $cut_words[1], date("Y-m-d H:i:s")]);
                    return redirect()->to(url()->previous());
                }

                # return there is no so thread

            }

            # return 404
            abort(404);
        }

        # return you are not logged in

        


        
        
        
    }
}
