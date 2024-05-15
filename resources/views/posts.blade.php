@extends("layouts.layout")

@section("content")

<div class="boards">
    <div class="gen-tabs">
        <table class="posts" id="gen">

            <tr class="head-row">
                <td colspan="3" id="main">Posts page</td>


                <!-- <td>Moderators</td> -->
                <td>Author</td>
            </tr>

            @foreach($posts as $post)

            <tr class="data-row">
                
                <td id="back"></td>
                <td id="posttext">
                    @auth()
                    <div class="dlt-button">

                        <form action="{{ route('post.delete', ["postid" => $post->postid, "postautor" => $post->username]) }}" method="post">
                        @csrf
                            <input type="submit" class="windows98button" value="Delete" id="post-delete">
                        </form>
                    </div>
                    @endauth
                    <p>{{$post->posttext}}</p>
                </td>
                <td id="back"></td>
                <td id="autor">
                    <div class="autorcanvas">
                        <a href="/{{$post->username}}">{{$post->username}}</a>
                        <div class="frame">
                            <img id="frame" src="/assets/icons/frame.png">

                        </div>


                    </div>


                </td>
                <!-- <td id="moderators">mmss</td> -->

            </tr>

            @endforeach




        </table>
        @auth()
        <div class="post-input" style="width: 100%; border: 1px solid black; bottom: 0;">
            <form action="{{route("post.create")}}" method="POST">
                @csrf
                <textarea id="postinput" style="width: 100%; height: 90px; resize: none; font-size: 19px;" name="posttextarea"></textarea>
                <div class="lowpanel" style="width: 100%; border: 1px solid black; height: 32px;">
                    <button type="submit">Send</button>

                </div>
            </form>
        </div>
        @endauth
    </div>
    <div class="default-tabs"></div>


</div>

@endsection