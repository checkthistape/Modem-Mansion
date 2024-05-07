@extends("layouts.layout")

@section("content")

<div class="boards">
    <div class="gen-tabs">
        <table class="board" id="gen">
            <tr class="head-row">
                <td colspan="2" id="main">Main boards</td>

                <td>Threads</td>
                <td>Posts</td>
                <td>Last post</td>
            </tr>

            @foreach($boards as $board)

            @if ($board->boardstatusid_fk == 1)
            @once
            <tr class="divider">
                <td colspan="6" id="divider-text">{{$board->boardstatusname}}</td>
            </tr>
            @endonce
            <tr class="data-row">
                <td id="image"><img src="/assets/icons/error5.gif"></td>
                <td id="text"><a href="/board/{{$board->boardid}}">{{$board->boardname}}</a></td>
                <td id="threads">{{ $board->thread_count }}</td>
                <td id="posts">{{ $board->post_count }}</td>

                <td id="lastpost">
                    @if (empty($board->last_post_id))
                    There are no posts yet :(
                    @else

                    {{ $newformat = date('M d, Y H:i',strtotime($board->last_post_date)) }}</br>
                    by <a href="/{{$board->last_posted_by_username}}">{{ $board->last_posted_by_username}}</a>

                    @endif
                </td>
            </tr>

            @endif


            @endforeach


            @foreach($boards as $board)

            @if ($board->boardstatusid_fk == 2)
            @once
            <tr class="divider">
                <td colspan="6" id="divider-text">{{$board->boardstatusname}}</td>
            </tr>
            @endonce
            <tr class="data-row">
                <td id="image"><img src="/assets/icons/error5.gif"></td>
                <td id="text"><a href="/board/{{$board->boardid}}">{{$board->boardname}}</a></td>
                <td id="threads">{{ $board->thread_count }}</td>
                <td id="posts">{{ $board->post_count }}</td>

                <td id="lastpost">
                    @if (empty($board->last_post_id))
                    There are no posts yet :(
                    @else

                    {{ $newformat = date('M d, Y H:i',strtotime($board->last_post_date)) }}</br>
                    by <a href="/{{$board->last_posted_by_username}}">{{ $board->last_posted_by_username}}</a>

                    @endif
                </td>
            </tr>
            @endif


            @endforeach

            @foreach($boards as $board)

            @if ($board->boardstatusid_fk == 3)
            @once
            <tr class="divider">
                <td colspan="6" id="divider-text">{{$board->boardstatusname}}</td>
            </tr>
            @endonce
            <tr class="data-row">
                <td id="image"><img src="/assets/icons/error5.gif"></td>
                <td id="text"><a href="/board/{{$board->boardid}}">{{$board->boardname}}</a></td>
                <td id="threads">{{ $board->thread_count }}</td>
                <td id="posts">{{ $board->post_count }}</td>

                <td id="lastpost">
                    @if (empty($board->last_post_id))
                    There are no posts yet :(
                    @else

                    {{ $newformat = date('M d, Y H:i',strtotime($board->last_post_date)) }}</br>
                    by <a href="/{{$board->last_posted_by_username}}">{{ $board->last_posted_by_username}}</a>

                    @endif
                </td>
            </tr>
            @endif


            @endforeach

        </table>
    </div>
    <div class="default-tabs"></div>


</div>

@endsection