<?php

namespace App\Http\Controllers;

use App\Models\Boards;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index($boardid)
    {

        if (!$this->boardExists($boardid)) {
            return abort(404);
        }

        $threads = DB::select("select threads.*, count(posts.postid) as post_count, users.username from threads left join posts on threads.threadid = posts.threadid_fk left join users on threads.threadstartedbyid_fk = users.userid where threads.boardid_fk = ? group by threads.threadid, threads.threadname, users.username", array($boardid));
        # select threads.threadid, threads.threadname, count(posts.postid) as post_count, users.username from threads left join posts on threads.threadid = posts.threadid_fk left join users on threads.threadstartedbyid_fk = users.userid group by threads.threadid, threads.threadname, users.username;
        
        if (!$threads) {
            # Show the "board" page with the "There are no threads yet, but you can create them!"
        }

        //dump($threads);
        

        return view("board", ["threads" => $threads]);
    }

    public static function boardExists($boardid)
    {
        if (!DB::select("select boardid FROM boards where boardid = ? LIMIT 1", array($boardid))) {
            echo "yoyo, boardcontrolller";
            return false;
        }
        return true;
    }
}
