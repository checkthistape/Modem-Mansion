<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BoardController;

class ThreadController extends Controller
{
    //
    public function index($boardid, $threadid)
    {
        # Question:
        # Is it better to reroute the client to BoardController that routes him to ThreadController to handle
        # something like: /board/3/thread/8, or the whole request should handle ThreadController by itself?

        # Check if the requested board exists
        if (!BoardController::boardExists($boardid)) {
            return abort(404);
        }

        # Check if the requested thread exists
        if (!$this->threadExists($threadid)) {
            return abort(404);
        }

        # Check if the requested thread exists on the requested board
        if (!$this->threadsInBoard($threadid, $boardid)) {
            return abort(404, "There is no thread with id " . $threadid . " in board with id " . $boardid)->withErrors("asdasd");
        };

        $posts = $this->postsInThread($threadid);
        if (!$posts) {
            echo "There are no posts yet, but you can write them!";
            # Show the "board" page with the "There are no posts yet, but you can write them!"
        }

        // foreach($posts as $post){
        //     echo $post->postedbyuserid_fk." </br>";
        // }

        return view("posts", ["posts" => $posts]);
    }

    public static function threadExists($threadid)
    {
        if (!(DB::select("select threadid FROM threads where threadid = ? LIMIT 1", array($threadid)))) {
            echo "yoyo, threadcontrolller exists";
            return false;
        }
        return true;
    }

    public static function threadsInBoard($threadid, $boardid)
    {
        $threadsInBoard = DB::select("select threadid FROM threads where threadid = ? AND boardid_fk = ?", array($threadid, $boardid));
        if (!$threadsInBoard) {
            echo "yoyo, threadcontrolller inboard";
            return false;
        }
        return true;
    }

    public static function postsInThread($threadid)
    {
        $posts = DB::select("select posts.postid, posts.posttext, posts.postdate, users.username from posts inner join users on posts.postedbyuserid_fk = users.userid where posts.threadid_fk = ?", array($threadid));
        if (!$posts) {
            echo "there are no posts in threads";
            return [];
        }
        return $posts;
    }
}
