@extends("layouts.layout")

@section("content")

<div class="boards">
    <div class="gen-tabs">
        <table class="board" id="gen">
            <tr class="head-row">
                <td colspan="3" id="main">Main boards</td>

                <td>Started by</td>
                <td>Posts</td>
                <!-- <td>Moderators</td> -->
                <td>Last post</td>
            </tr>

            @foreach($posts as $post)

            <tr class="data-row">
                <td id="image">image</td>
                <td id="image">image</td>
                <td id="text">{{$post->posttext}}</td>
                <td id="lastpost"><a href="/{{$post->username}}">{{$post->username}}</a></td>
                <td id="posts">{{$post->postdate}}</td>
                <!-- <td id="moderators">mmss</td> -->
                <td id="lastpost">lastpost</td>
            </tr>

            @endforeach




        </table>
    </div>
    <div class="default-tabs"></div>


</div>

@endsection