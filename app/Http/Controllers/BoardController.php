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

        //$threads = DB::select("select threads.*, count(posts.postid) as post_count, users.username from threads left join posts on threads.threadid = posts.threadid_fk left join users on threads.threadstartedbyid_fk = users.userid where threads.boardid_fk = ? group by threads.threadid, threads.threadname, users.username", array($boardid));
          #select threads.threadid, threads.threadname, threads.threadstartedbyid_fk as thread_starter_id,
       

        $threads = DB::select("
            select threads.threadid, threads.threadname, threads.threadstartedbyid_fk as thread_starter_id,
            thread_starter.username as thread_starter_username, count(posts.postid) as post_count, 
            last_post.postid as last_post_id, last_post.postdate as last_post_date, 
            last_user.username as last_username
            from threads
            left join posts on threads.threadid = posts.threadid_fk
            left join users as thread_starter on threads.threadstartedbyid_fk = thread_starter.userid
            left join users on posts.postedbyuserid_fk = users.userid
            left join (
                select threadid_fk, max(postdate) as max_postdate
                from posts
                group by threadid_fk
            ) as latest_post on threads.threadid = latest_post.threadid_fk
            left join posts as last_post on latest_post.threadid_fk = last_post.threadid_fk 
                               and latest_post.max_postdate = last_post.postdate
            left join users as last_user on last_post.postedbyuserid_fk = last_user.userid
            where threads.boardid_fk = ?
            group by threads.threadid, threads.threadname, thread_starter_id, 
            thread_starter_username, last_post_id, last_post_date, last_username; 
        ", array($boardid));


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
