@extends("layouts.layout")

@section("content")

<div class="boards">
    <div class="gen-tabs">
        <table class="board" id="gen">
            <tr class="head-row">
                <td colspan="2" id="main">Main boards</td>

                <td>Threads</td>
                <td>Posts</td>
                <td>Moderators</td>
                <td>Last post</td>
            </tr>

            @foreach($board_statuses as $bo_st)
                @foreach($boards as $board)
                    @if ($bo_st->boardstatusid == 1)

                        @if ($bo_st->boardid == (($board->boardid)))
                            <tr class="data-row">
                                <td id="image">image</td>
                                <td id="text"><a href="/board/{{$board->boardid}}">{{$board->boardname}}</a></td>
                                <td id="threads">{{ isset($threadsNumbArr[($board->boardid)]) ? $threadsNumbArr[($board->boardid)] : 0 }}</td>
                                <td id="posts">12</td>
                                <td id="moderators">mmss</td>
                                <td id="lastpost">lastpost</td>
                            </tr>
                        @else

                        @endif


                    @endif
                @endforeach

            @endforeach

            {{--
                foreach($boards as $board){
                    // in 'main boards' show only boards with boardstatusid = 1 ($bo_st->boardstatusid == 1)
                    // then show divider <tr class='divider'></tr>
                    // in Forum Hub show only boards with boardstatusid = 2 ($bo_st->boardstatusid == 2)
                    // in Others show only boards with boardstatusid = 3
                }   
                --}}


            {{-- @foreach($boards as $board) <tr class="data-row">
                    <td id="image">image</td>
                    <td id="text">{{$board->boardname}}</td>
                    <td id="threads">23</td>
                    <td id="posts">12</td>
                    <td id="moderators">mmss</td>
                    <td id="lastpost">lastpost</td>
                </tr>

                @endforeach --}}





            {{-- 1.Informational --}}
            {{-- 2. Main --}}
            {{-- 3. Disscusions --}}
            
            <tr class="divider">
                <td colspan="6" id="divider-text">Info Part</td>
            </tr>
            @foreach($board_statuses as $bo_st)
                @foreach($boards as $board)
                    @if ($bo_st->boardstatusid == 2)

                        @if ($bo_st->boardid == (($board->boardid)))
                            <tr class="data-row">
                                <td id="image">image</td>
                                <td id="text"><a href="/board/{{$board->boardid}}">{{$board->boardname}}</a></td>
                                <td id="threads">{{ isset($threadsNumbArr[($board->boardid)]) ? $threadsNumbArr[($board->boardid)] : 0 }}</td>
                                <td id="posts">12</td>
                                <td id="moderators">mmss</td>
                                <td id="lastpost">lastpost</td>
                            </tr>
                        @else

                        @endif


                    @endif
                @endforeach

            @endforeach

            
            <!-- @foreach($boards as $board)

            <tr class="data-row">
                <td id="image">image</td>
                <td id="text">{{$board->boardname}}</td>
                <td id="threads">23</td>
                <td id="posts">12</td>
                <td id="moderators">mmss</td>
                <td id="lastpost">lastpost</td>
            </tr>

            @endforeach -->


            <tr class="divider">
                <td colspan="6" id="divider-text">Forum Hub</td>
            </tr>

            @foreach($board_statuses as $bo_st)
                @foreach($boards as $board)
                    @if ($bo_st->boardstatusid == 3)

                        @if ($bo_st->boardid == (($board->boardid)))
                            <tr class="data-row">
                                <td id="image">image</td>
                                <td id="text"><a href="/board/{{$board->boardid}}">{{$board->boardname}}</a></td>
                                <td id="threads">{{ isset($threadsNumbArr[($board->boardid)]) ? $threadsNumbArr[($board->boardid)] : 0 }}</td>
                                <td id="posts">12</td>
                                <td id="moderators">mmss</td>
                                <td id="lastpost">lastpost</td>
                            </tr>
                        @else

                        @endif


                    @endif
                @endforeach

            @endforeach
            <!-- <tr class="data-row">
                    <td id="image">image</td>
                    <td id="text">text</td>
                    <td id="threads">Threads</td>
                    <td id="posts">Posts</td>
                    <td id="moderators">Moderators</td>
                    <td id="lastpost">Last post</td>
                </tr> -->
        </table>
    </div>
    <div class="default-tabs">asd</div>


</div>

@endsection