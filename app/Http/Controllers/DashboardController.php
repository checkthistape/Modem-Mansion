<?php

namespace App\Http\Controllers;

use App\Models\Boards;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $boards = $this->getBoardsFullAdd();
        if (!$boards) {
            echo "There are no badges yet, write to the admin!";
            # Show the "boards" page with the "There are no badges yet, write to the admin!"
        }




        return view("boards", ['boards' => $boards]);
    }

    public static function getBoardsFullAdd()
    {
        // $boards = DB::select(
        //     "select boards.*, users.username, board_statuses.boardstatusname, count(threads.threadid) as threads, count(posts.postid) as posts
        //     from `boards`
        //     left join users on users.userid = boards.createdbyuserid_fk
        //     left join board_statuses on board_statuses.boardstatusid = boards.boardstatusid_fk
        //     left join threads on threads.boardid_fk = boards.boardid
        //     left join posts on posts.threadid_fk = threads.threadid
        //     group by boards.boardid"
        // );

        // $boards = DB::select(
        //     "select boards.*, users.username, board_statuses.boardstatusname, count(threads.threadid) as threads, last_post.postid as last_post_id,
        //     last_post.postdate as last_post_date, last_user.username as last_username, count(posts.postid) as posts
        //     from `boards`
        //     left join users on users.userid = boards.createdbyuserid_fk 
        //     left join board_statuses on board_statuses.boardstatusid = boards.boardstatusid_fk 
        //     left join threads on threads.boardid_fk = boards.boardid left join posts on posts.threadid_fk = threads.threadid 
        //     left join ( select threadid_fk, max(postdate) as max_postdate from posts group by threadid_fk ) as latest_post on threads.threadid = latest_post.threadid_fk 
        //     left join posts as last_post on latest_post.threadid_fk = last_post.threadid_fk and latest_post.max_postdate = last_post.postdate 
        //     left join users as last_user on last_post.postedbyuserid_fk = last_user.userid 
        //     group by boards.boardid;"
        // );

        $boards = DB::select("
        select b.boardid, b.boardname, b.boardstatusid_fk, board_statuses.boardstatusname, b.createdbyuserid_fk as board_creator_id, count(distinct t.threadid) as thread_count,
        count(p.postid) as post_count, max(p.postdate) as last_post_date, max(p.postid) as last_post_id,
        ( select postedbyuserid_fk from posts as lp where lp.threadid_fk = t.threadid order by lp.postdate desc limit 1 ) as last_posted_by_user_id,
        ( select username from users as u join posts as lp on u.userid = lp.postedbyuserid_fk where lp.threadid_fk = t.threadid order by lp.postdate desc limit 1 ) as last_posted_by_username 
        from boards b 
        left join threads t on b.boardid = t.boardid_fk 
        left join posts p on t.threadid = p.threadid_fk 
        left join board_statuses on b.boardstatusid_fk = board_statuses.boardstatusid
        group by b.boardid;
        ");
        if (!$boards) {
            return [];
        }
        return $boards;
    }
}
