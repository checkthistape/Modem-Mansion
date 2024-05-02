<?php

namespace App\Http\Controllers;

use App\Models\Boards;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $threadsNumbArr = [];
        $threads_numb = DB::select("select boardid_fk, COUNT(*) as thread_count from threads group by boardid_fk");
        foreach($threads_numb as $thrN){
            $threadsNumbArr[$thrN->boardid_fk]=$thrN->thread_count;
        }

        

        $boards = DB::table('boards')->get();
        $board_statuses = DB::table("boards_board_statuses")->get();
        return view("boards", ['boards' => $boards], ['board_statuses' => $board_statuses])->with("threadsNumbArr", $threadsNumbArr);
    }
}
