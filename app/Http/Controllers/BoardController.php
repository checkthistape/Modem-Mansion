<?php

namespace App\Http\Controllers;

use App\Models\Boards;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index($id)
    {
        //echo $id;
        $threads = DB::select("select * from threads where boardid_fk = ?", array($id));

        return view("board", ["threads" => $threads]);
    }
}
