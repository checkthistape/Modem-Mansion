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
                <a href="/signup" id="reg"><img src="{{ asset('assets/icons/register.png') }}" width="16px" height="16px">Register</a>
                <a href="" id="log"><img src="{{ asset('assets/icons/login.png') }}" width="16px" height="16px">Login</a>
            </div>

        </div>
        <div class="tabs">
            <div class="tab"><a href="audio/audio.php"><img class="icon" id="audio" src="{{ asset('assets/icons/audio.png') }}" width="32" height="32">Audio</a></div>
            <div class="tab"><a href="video/video.php"><img class="icon" id="video" src="{{ asset('assets/icons/video1.png') }}" width="32" height="32">Video</a></div>
            <div class="tab"><a href="pdf/pdf.php"><img class="icon" id="pdf" src="{{ asset('assets/icons/pdf.png') }}" width="32" height="32">PDF</a></div>
            <div class="tab"><a href="canvas/canvas.php"><img class="icon" id="canvas" src="{{ asset('assets/icons/canvas.png') }}" width="32" height="32">Canvas</a></div>
            <div class="tab"><a href="map/map.php"><img class="icon" id="map" src="{{ asset('assets/icons/map.png') }}" width="32" height="32">Map</a></div>
            <div class="tab"><a href="gifs/gifs.php"><img class="icon" id="gif" src="{{ asset('assets/icons/gifs.png') }}" width="32" height="32">Gifs</a></div>
        </div>

        <div class="header">
            <div class="logo">
                <a href="/"><img src="{{ asset('assets/icons/modem-mansion.png') }}" width="640.250px" height="41px"></a>
                <a href="/"><img src="{{ asset('assets/icons/forum.png') }}" width="145.5px" height="22px"></a>

            </div>
            <div class="welcome">
                <p id="welcome"> Welcome, <span id="bold-p">Guest</span>. Please <a href="/login"><span id="bold-l">login</span></a> or <a href="/signup"><span id="bold-l">register</span></a>. - <a href="/signup" style="text-decoration: none;"><span id="bold-ld">Thinking of joining the forum??</span></a></br>
                    <?php echo date("M d, Y"); ?> - What's on your mind?
                </p>
            </div>
        </div>

        <div class="sub-header">
            <p id="info">Forum activity: </p>
            <p id="posts">Posts: <span id="posts-stat">42k</span></p>
        </div>