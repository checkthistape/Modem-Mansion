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
            
            @foreach($threads as $thread)

            <tr class="data-row">
                <td id="image">image</td>
                <td id="text">{{$thread->threadname}}</td>
                <td id="threads">23</td>
                <td id="posts">12</td>
                <td id="moderators">mmss</td>
                <td id="lastpost">lastpost</td>
            </tr>

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