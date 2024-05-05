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

            <tr class="data-row">
                <td id="image">image</td>
                <td id="image">image</td>
                <td id="text"><a href="/{{Request::path()}}/thread/{{$thread->threadid}}">{{$thread->threadname}}</a></td>
                <td id="lastpost"><a href="/{{$thread->username}}">{{$thread->username}}</a></td>
                <td id="posts">{{$thread->post_count}}</td>
                <!-- <td id="moderators">mmss</td> -->
                <td id="lastpost">lastpost</td>
            </tr>

            @endforeach




        </table>
    </div>
    <div class="default-tabs"></div>


</div>

@endsection