@extends("layouts.layout")

@section("content")

<div class="boards">
    <div class="gen-tabs">
        <table class="board" id="gen">
            <tr class="head-row">
                <td colspan="3" id="main">Threads</td>

                <td>Started by</td>
                <td>Posts</td>
                <!-- <td>Moderators</td> -->
                <td>Last post</td>
            </tr>

            @foreach($threads as $thread)

            <tr class="data-row thread">
                <td id="image">image</td>
                <td id="image">image</td>
                <td id="text"><a href="/{{Request::path()}}/thread/{{$thread->threadid}}">{{$thread->threadname}}</a></td>
                <td id="lastpost"><a href="/{{$thread->thread_starter_username}}">{{$thread->thread_starter_username}}</a></td>
                <td id="posts">{{$thread->post_count}}</td>
                <!-- <td id="moderators">mmss</td> -->
                <td id="lastpost">
                    @if (empty($thread->last_post_id))
                        There are no posts yet :(
                    @else

                        {{ $thread->last_post_date }}</br>
                        by <a href="/{{$thread->last_username}}">{{ $thread->last_username}}</a>

                    @endif
                </td>
            </tr>

            @endforeach




        </table>
    </div>
    <div class="default-tabs"></div>


</div>

@endsection