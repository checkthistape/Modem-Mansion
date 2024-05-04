        <div class="thin-head">
            <div class="block1">
                <a href="/"><img id="rlogo" src="" width="180px" height="27px"></a>
                <p id="since">20 Apr 2024 -
                    <?php echo date("d M Y"); ?>
                </p>
            </div>

            <div class="block2">
                <img src="{{ asset('assets/icons/special/mm-gif.gif') }}" width="" height="49px">
            </div>

            <div class="block3">
                @guest
                <a href="/registrate" id="reg"><img src="{{ asset('assets/icons/register.png') }}" width="16px" height="16px">Register</a>
                <a href="/login" id="log"><img src="{{ asset('assets/icons/login.png') }}" width="16px" height="16px">Login</a>
                @endguest
            </div>

        </div>
        @if(session()->has('registration-success'))
        <div class="regmessage" id="regmessage" style="width:100%; height:30px; display:flex; flex-direction: row; overflow: hidden; position: sticky; background-color: green; top: 0; justify-content: space-between;">
            <p>You have successfully registrated</p>
            <button style="background-color: none; background: none; border-radius: 40%; width:'5px'; height: '5px';" onclick="document.getElementById('regmessage').style.display = 'none';">X</button>
        </div>
        @endif
        <div class="tabs">
            <div class="tab"><a href="audio/audio.php"><img class="icon" id="audio" src="{{ asset('assets/icons/audio.png') }}" width="32" height="32">Home</a></div>
            <div class="tab"><a href="video/video.php"><img class="icon" id="video" src="{{ asset('assets/icons/video1.png') }}" width="32" height="32">Search</a></div>
            <div class="tab"><a href="pdf/pdf.php"><img class="icon" id="pdf" src="{{ asset('assets/icons/pdf.png') }}" width="32" height="32">Memes</a></div>
            <div class="tab"><a href="gifs/gifs.php"><img class="icon" id="gif" src="{{ asset('assets/icons/gifs.png') }}" width="32" height="32">Gifs</a></div>
            <div class="tab"><a href="canvas/canvas.php"><img class="icon" id="canvas" src="{{ asset('assets/icons/canvas.png') }}" width="32" height="32">Ranking</a></div>
            <div class="tab"><a href="map/map.php"><img class="icon" id="map" src="{{ asset('assets/icons/map.png') }}" width="32" height="32">Map</a></div>

        </div>
        <div class="tinynavbar">
            <a href=""><span>Home</span></a>
            <span>|</span>
            <a href=""><span>News</span></a>
            <span>|</span>
            <a href=""><span>Search</span></a>
            <span>|</span>
            <a href=""><span>Mail</span></a>
            <span>|</span>
            <a href=""><span>Ideas</span></a>
            <span>|</span>
            <a href=""><span>Hosted Sites</span></a>
            <span>|</span>
            <a href=""><span>Invite</span></a>
            <span>|</span>
            <a href=""><span>Memes</span></a>
            <span>|</span>
            <a href=""><span>Discord</span></a>
            <span>|</span>
            <a href=""><span>Gifs</span></a>
            <span>|</span>
            <a href=""><span>Events</span></a>
            <span>|</span>
            <a href=""><span>Forums</span></a>
            <span>|</span>
            <a href=""><span>Profile</span></a>
        </div>

        <div class="header">
            <div class="logo">
                <a href="/"><img src="{{ asset('assets/icons/modem-mansion.png') }}" width="640.250px" height="41px"></a>
                <a href="/"><img src="{{ asset('assets/icons/forum.png') }}" width="145.5px" height="22px"></a>

            </div>
            @guest
            <div class="welcome">
                <p id="welcome"> Welcome, <span id="bold-p">Guest</span>. Please <a href="/login"><span id="bold-l">login</span></a> or <a href="/signup"><span id="bold-l">register</span></a>. - <a href="/signup" style="text-decoration: none;"><span id="bold-ld">Thinking of joining the forum??</span></a></br>
                    <?php echo date("M d, Y"); ?> - What's on your mind?
                </p>
            </div>
            @endguest
        </div>

        @if(DB::table('posts')->count()>999)
        <div class="sub-header">
            <p id="info">Forum activity: </p>
            <p id="posts">Posts: <span id="posts-stat">{{(DB::table('posts')->count())/1000}}k</span></p>
        </div>
        @else
        <div class="sub-header">
            <p id="info">Forum activity: </p>
            <p id="posts">Posts: <span id="posts-stat">{{DB::table('posts')->count()}}</span></p>
        </div>

        @endif