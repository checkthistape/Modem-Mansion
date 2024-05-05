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
        $boards = DB::select(
            "select boards.*, users.username, board_statuses.boardstatusname, count(threads.threadid) as threads, count(posts.postid) as posts
            from `boards`
            left join users on users.userid = boards.createdbyuserid_fk
            left join board_statuses on board_statuses.boardstatusid = boards.boardstatusid_fk
            left join threads on threads.boardid_fk = boards.boardid
            left join posts on posts.threadid_fk = threads.threadid
            group by boards.boardid"
        );
        if (!$boards) {
            return [];
        }
        return $boards;
    }
}
